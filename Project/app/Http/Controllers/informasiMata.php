<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class informasiMata extends Controller
{
    public function getMatkulandredirect(Request $request,$semester = 1)
    {
        $mahasiswaCookie = json_decode($request->cookie('mahasiswa'), true);
        $kodeJurusan = $mahasiswaCookie['jurusanMhs'] ?? null;

        // Jika nilai jurusan tidak ada, Anda dapat menangani kasus ini sesuai kebutuhan aplikasi Anda
        if (!$kodeJurusan) {
            return redirect()->route('login')->with('error', 'Jurusan tidak ditemukan.');
        }

        // Menggunakan nilai jurusan untuk mendapatkan data jadwal
        $jadwals = Jadwal::getByJurusan($kodeJurusan);
        // Jika tidak ada jadwal ditemukan
        if ($jadwals->isEmpty()) {
            return redirect()->view('info')->with('info', 'Tidak ada jadwal ditemukan.');
        }
        // Mengirim data jadwal ke tampilan (view)
        return view('info', compact('jadwals'));
    }
}
