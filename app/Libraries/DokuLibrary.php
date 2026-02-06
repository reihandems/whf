<?php

namespace App\Libraries;

class DokuLibrary
{
    private $clientId;
    private $secretKey;
    private $apiUrl;

    public function __construct()
    {
        $this->clientId = env('DOKU_CLIENT_ID');
        $this->secretKey = env('DOKU_SECRET_KEY');
        $this->apiUrl = env('DOKU_URL');

        if (empty($this->clientId) || empty($this->secretKey)) {
            log_message('error', 'DOKU Credentials missing in environment!');
        }
    }

    public function generateSignature($requestId, $timestamp, $targetPath, $body = '')
    {
        $digest = "";
        if ($body) {
            $bodyString = is_string($body) ? $body : json_encode($body);
            $digest = base64_encode(hash('sha256', $bodyString, true));
        }

        $componentString = "Client-Id:" . $this->clientId . "\n" .
            "Request-Id:" . $requestId . "\n" .
            "Request-Timestamp:" . $timestamp . "\n" .
            "Request-Target:" . $targetPath;

        if ($digest) {
            $componentString .= "\n" . "Digest:" . $digest;
        }

        log_message('debug', "DOKU Component String:\n" . $componentString);

        $signature = hash_hmac('sha256', $componentString, $this->secretKey, true);
        return "HMACSHA256=" . base64_encode($signature);
    }

    public function initiatePayment($data)
    {
        $requestId = bin2hex(random_bytes(16));
        $timestamp = gmdate("Y-m-d\TH:i:s\Z");
        $targetPath = '/checkout/v1/payment';

        $bodyString = json_encode($data);
        $signature = $this->generateSignature($requestId, $timestamp, $targetPath, $bodyString);

        $ch = curl_init($this->apiUrl . $targetPath);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $bodyString);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Client-Id: ' . $this->clientId,
            'Request-Id: ' . $requestId,
            'Request-Timestamp: ' . $timestamp,
            'Signature: ' . $signature,
            'Content-Type: application/json'
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
            log_message('error', 'DOKU Curl Error: ' . $error_msg);
        }

        curl_close($ch);

        if ($httpCode >= 200 && $httpCode < 300) {
            return json_decode($response, true);
        }

        log_message('error', "DOKU Payment Failed (v2) ($httpCode): $response Request: $bodyString Signature: $signature");

        return [
            'error' => true,
            'code' => $httpCode,
            'message' => $response
        ];
    }

    public function checkStatus($invoiceNumber)
    {
        $requestId = bin2hex(random_bytes(16));
        $timestamp = gmdate("Y-m-d\TH:i:s\Z");
        $targetPath = '/orders/v1/status/' . $invoiceNumber;

        $componentString = "Client-Id:" . $this->clientId . "\n" .
            "Request-Id:" . $requestId . "\n" .
            "Request-Timestamp:" . $timestamp . "\n" .
            "Request-Target:" . $targetPath;

        $signature = hash_hmac('sha256', $componentString, $this->secretKey, true);
        $signature = "HMACSHA256=" . base64_encode($signature);

        $ch = curl_init($this->apiUrl . $targetPath);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Client-Id: ' . $this->clientId,
            'Request-Id: ' . $requestId,
            'Request-Timestamp: ' . $timestamp,
            'Signature: ' . $signature
        ]);

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }
}
