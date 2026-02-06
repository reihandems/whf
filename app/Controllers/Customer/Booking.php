<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;
use App\Models\BookingTrainerModel;
use App\Models\TrainerModel;

class Booking extends BaseController
{
    public function index()
    {
        $id_customer = session()->get('user_id');
        $bookingModel = new BookingTrainerModel();
        $dokuLibrary = new \App\Libraries\DokuLibrary();

        // Check Pending Bookings Status from DOKU
        // Only check if status filter is 'menunggu_pembayaran' or default
        $pendingBookings = $bookingModel->where('id_customer', $id_customer)
            ->where('status_booking', 'menunggu_pembayaran')
            ->findAll();

        foreach ($pendingBookings as $pb) {
            // Check Doku Status
            $statusCheck = $dokuLibrary->checkStatus($pb['kode_booking']);

            // If Paid, Update Status
            // Note: Structure of DOKU check status response might vary, adjust navigating the array accordingly.
            // Assuming standard response: ['transaction' => ['status' => 'SUCCESS']]
            if (isset($statusCheck['transaction']['status']) && $statusCheck['transaction']['status'] == 'SUCCESS') {
                $bookingModel->update($pb['id_booking'], [
                    'status_booking' => 'terkonfirmasi',
                    'tanggal_pembayaran' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
            }
        }

        $status_filter = $this->request->getGet('status') ?: 'menunggu_pembayaran';

        // Get counts for each status
        $counts = [
            'menunggu_pembayaran' => $bookingModel->where('id_customer', $id_customer)->where('status_booking', 'menunggu_pembayaran')->countAllResults(),
            'terkonfirmasi' => $bookingModel->where('id_customer', $id_customer)->where('status_booking', 'terkonfirmasi')->countAllResults(),
            'selesai' => $bookingModel->where('id_customer', $id_customer)->where('status_booking', 'selesai')->countAllResults(),
            'dibatalkan' => $bookingModel->where('id_customer', $id_customer)->where('status_booking', 'dibatalkan')->countAllResults(),
        ];

        $bookings = $bookingModel->select('booking_trainer.*, trainers.nama_trainer, trainers.foto_profil, trainers.kategori, (SELECT COUNT(*) FROM review_trainer WHERE id_booking = booking_trainer.id_booking) as review_count')
            ->join('trainers', 'trainers.id_trainer = booking_trainer.id_trainer')
            ->where('booking_trainer.id_customer', $id_customer)
            ->where('booking_trainer.status_booking', $status_filter)
            ->orderBy('booking_trainer.created_at', 'DESC')
            ->findAll();

        $data = [
            'menu' => 'booking',
            'bookings' => $bookings,
            'current_status' => $status_filter,
            'counts' => $counts
        ];

        return view('pages/customer/view_booking', $data);
    }

    public function detail($id)
    {
        $id_customer = session()->get('user_id');
        $bookingModel = new BookingTrainerModel();

        $booking = $bookingModel->select('booking_trainer.*, trainers.nama_trainer, trainers.foto_profil, trainers.kategori, trainers.deskripsi, trainers.harga_per_sesi, (SELECT COUNT(*) FROM review_trainer WHERE id_booking = booking_trainer.id_booking) as review_count')
            ->join('trainers', 'trainers.id_trainer = booking_trainer.id_trainer')
            ->where('booking_trainer.id_booking', $id)
            ->where('booking_trainer.id_customer', $id_customer)
            ->first();

        if (!$booking) {
            return redirect()->to('/user/booking')->with('error', 'Booking tidak ditemukan.');
        }

        $data = [
            'menu' => 'booking',
            'b' => $booking
        ];

        return view('pages/customer/view_detail_booking', $data);
    }

    public function submitReview()
    {
        $id_customer = session()->get('user_id');
        $id_booking = $this->request->getPost('id_booking');
        $id_trainer = $this->request->getPost('id_trainer');
        $rating = $this->request->getPost('rating');
        $komentar = $this->request->getPost('komentar');

        $db = \Config\Database::connect();
        $db->transStart();

        $db->table('review_trainer')->insert([
            'id_trainer' => $id_trainer,
            'id_customer' => $id_customer,
            'id_booking' => $id_booking,
            'rating' => $rating,
            'komentar' => $komentar,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        // Update trainer average rating
        $avgRating = $db->table('review_trainer')
            ->where('id_trainer', $id_trainer)
            ->selectAvg('rating')
            ->get()
            ->getRow()->rating;

        $totalReview = $db->table('review_trainer')
            ->where('id_trainer', $id_trainer)
            ->countAllResults();

        $db->table('trainers')
            ->where('id_trainer', $id_trainer)
            ->update([
                'rating' => $avgRating,
                'jumlah_review' => $totalReview
            ]);

        $db->transComplete();

        if ($db->transStatus() === FALSE) {
            return redirect()->back()->with('error', 'Gagal mengirim ulasan.');
        }

        return redirect()->to('/user/booking?status=selesai')->with('success', 'Terima kasih atas ulasan Anda untuk trainer kami!');
    }
}
