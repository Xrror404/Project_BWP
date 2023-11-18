<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $nrp_mhs = $request->session()->get('Username');
        // Fetch student data (assuming this logic exists in your application)
        $studentData = $this->getStudentData($nrp_mhs);

        // Fetch announcements using Eloquent model
        $announcements = $this->getAnnouncements();

        return view('home', [
            'studentData' => $studentData,
            'announcements' => $announcements,
        ]);
    }

    // Function to get student data (replace this with your actual logic)
    private function getStudentData($nrp_mhs)
    {
        $studentData = DB::connection("KoneksiDatabase")
            ->table("mahasiswa")
            ->where('nrp_mhs', $nrp_mhs)
            ->first();

        return $studentData;
    }

    // Function to fetch announcements (replace this with your actual logic)
    private function getAnnouncements()
    {
        $announcements = DB::connection("KoneksiDatabase")
            ->table("Pengumuman")
            ->get();

        return $announcements;
    }
}
