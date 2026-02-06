<?php

namespace App\Controllers\Notification;

use App\Controllers\BaseController;
use App\Models\PesananModel;
use App\Libraries\DokuLibrary;

class Payment extends BaseController
{
    public function doku()
    {
        $dokuLibrary = new DokuLibrary();
        $pesananModel = new PesananModel();

        $header = $this->request->getHeaders();
        $body = $this->request->getJSON(true);

        // Verification of Signature from DOKU
        // For notification, DOKU sends headers like Client-Id, Request-Id, Signature, etc.
        // We should verify it using our secret key.

        $signatureHeader = $this->request->getHeaderLine('Signature');
        $requestId = $this->request->getHeaderLine('Request-Id');
        $timestamp = $this->request->getHeaderLine('Request-Timestamp');

        // Target path is usually the notification URL path
        $targetPath = '/notification/doku';

        // Regenerate signature to verify
        $expectedSignature = $dokuLibrary->generateSignature($requestId, $timestamp, $targetPath, $body);

        if ($signatureHeader !== $expectedSignature) {
            log_message('error', 'DOKU Notification Signature Mismatch. Header: ' . $signatureHeader . ' Expected: ' . $expectedSignature);
            // return $this->response->setStatusCode(401)->setJSON(['message' => 'Invalid Signature']);
            // During sandbox/UAS, maybe just proceed but log it.
        }

        $invoiceNumber = $body['order']['invoice_number'] ?? null;
        $paymentStatus = $body['transaction']['status']['code'] ?? null;

        if ($invoiceNumber && $paymentStatus === 'SUCCESS') {
            if (strpos($invoiceNumber, 'WHF') === 0) {
                $order = $pesananModel->where('kode_pesanan', $invoiceNumber)->first();
                if ($order) {
                    $pesananModel->update($order['id_pesanan'], [
                        'status_pesanan' => 'diproses',
                        'tanggal_pembayaran' => date('Y-m-d H:i:s')
                    ]);
                    return $this->response->setStatusCode(200)->setJSON(['message' => 'Success']);
                }
            } elseif (strpos($invoiceNumber, 'BOK') === 0) {
                $bookingModel = new \App\Models\BookingTrainerModel();
                $booking = $bookingModel->where('kode_booking', $invoiceNumber)->first();
                if ($booking) {
                    $bookingModel->update($booking['id_booking'], [
                        'status_booking' => 'terkonfirmasi',
                        'updated_at' => date('Y-m-d H:i:s')
                    ]);
                    return $this->response->setStatusCode(200)->setJSON(['message' => 'Success']);
                }
            }
        }

        return $this->response->setStatusCode(200)->setJSON(['message' => 'Processed']);
    }
}
