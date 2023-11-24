<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{


    public function index(Request $request)
    {
        try {
            $nrp_mhs = $request->input('Username');
            logger("Input NRP: $nrp_mhs"); // Log the input value
            $mahasiswa = Mahasiswa::getByNrp($nrp_mhs);
            logger($mahasiswa);
        } catch (\Exception $e) {
            logger("Error: " . $e->getMessage());
        }
        // Fetch announcements using Eloquent model
        $announcements = $this->getAnnouncements();
        $cookie = Cookie::make('mahasiswa', json_encode($mahasiswa), 300);
        return response()->view('home', [
            'announcements' => $announcements,
        ])->withCookie($cookie);
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
