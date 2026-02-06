<?php

namespace App\Controllers\Trainer;

use App\Controllers\BaseController;

class Booking extends BaseController
{
    public function index()
    {
        $id_trainer = session()->get('user_id');
        $bookingModel = new \App\Models\BookingTrainerModel();

        $status_filter = $this->request->getGet('status') ?: 'terkonfirmasi';

        $counts = [
            'terkonfirmasi' => $bookingModel->where('id_trainer', $id_trainer)->where('status_booking', 'terkonfirmasi')->countAllResults(),
            'selesai' => $bookingModel->where('id_trainer', $id_trainer)->where('status_booking', 'selesai')->countAllResults(),
        ];

        $bookings = $bookingModel->where('id_trainer', $id_trainer)
            ->where('status_booking', $status_filter)
            ->orderBy('created_at', 'DESC')
            ->findAll();

        $data = [
            'menu' => 'booking',
            'title' => 'Daftar Booking',
            'bookings' => $bookings,
            'current_status' => $status_filter,
            'counts' => $counts
        ];

        return view('pages/trainer/view_booking', $data);
    }

    public function complete($id)
    {
        $id_trainer = session()->get('user_id');
        $bookingModel = new \App\Models\BookingTrainerModel();

        $booking = $bookingModel->where('id_booking', $id)
            ->where('id_trainer', $id_trainer)
            ->first();

        if (!$booking) {
            return redirect()->back()->with('error', 'Booking tidak ditemukan.');
        }

        $bookingModel->update($id, ['status_booking' => 'selesai']);

        return redirect()->back()->with('success', 'Sesi latihan telah ditandai sebagai selesai.');
    }
}
