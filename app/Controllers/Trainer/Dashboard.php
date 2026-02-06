<?php

namespace App\Controllers\Trainer;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $id_trainer = session()->get('user_id');

        // Total Income: Sum of 'total' from completed or confirmed bookings (usually 'selesai' means money earned, 'terkonfirmasi' is pending execution but paid)
        // Let's assume income counts when paid (terkonfirmasi + selesai)
        $totalPendapatan = $db->table('booking_trainer')
            ->selectSum('total')
            ->where('id_trainer', $id_trainer)
            ->whereIn('status_booking', ['terkonfirmasi', 'selesai'])
            ->get()->getRow()->total;

        // Total Trainee: Unique trainees
        // Using email_trainee as unique identifier or just count unique bookings? Usually unique people.
        $totalTrainee = $db->table('booking_trainer')
            ->where('id_trainer', $id_trainer)
            ->distinct()
            ->select('email_trainee')
            ->countAllResults();

        // Total Booking Count
        $totalBooking = $db->table('booking_trainer')
            ->where('id_trainer', $id_trainer)
            ->countAllResults();

        $data = [
            'menu' => 'dashboard',
            'title' => 'Dashboard',
            'total_pendapatan' => $totalPendapatan ?? 0,
            'total_trainee' => $totalTrainee,
            'total_booking' => $totalBooking
        ];

        return view('pages/trainer/index', $data);
    }
}
