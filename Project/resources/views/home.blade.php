@extends('layouts.SIM')

{{-- @section('header')
    <div class="container">
        <!-- Header -->
        <header>
            <img src="../Assets/logoistts.png" alt="" style="height: 2vw; height: 2vw">
            <h1>Sistem Informasi Mahasiswa</h1>
        </header>
    </div>
@endsection --}}

{{-- @section('sidebar')

@endsection --}}
@section('DataMhs')
    @php
        $mahasiswaCookie = json_decode(request()->cookie('mahasiswa'));
        // Menampilkan data mahasiswa
        $namaMhs = $mahasiswaCookie->nama_mhs ?? 'KOSONG';
        $nrpMhs = $mahasiswaCookie->nrp_mhs ?? 'KOSONG';
    @endphp

    <h1>{{ $namaMhs }}</h1>
    <p>{{ $nrpMhs }}</p>
@endsection
@section('content')
    {{-- <div class="container">
        <!-- Display student data if available -->
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Perubahan Jadwal Kuliah</h5>
                <p class="card-text">untuk saat ini, tidak ada pengumuman Perubahan Jadwal Kuliah.</p>
            </div>
        </div>
    </div> --}}
    <div class="card">
        <div class="card-header">
            Perubahan Jadwal Kuliah
        </div>
        <div class="card-body">
            <h5 class="card-title">Perubahan Jadwal Kuliah</h5>
            <p class="card-text"></p>

        </div>
    </div>
    <!-- Announcement Card -->
    <section class="announcement-card">
        <h2>Announcement</h2>
        <div class="announcement-content">
            @foreach ($announcements as $announcement)
                <div class="announcement-item">
                    <h3>{{ $announcement->judul_pengumuman }}</h3>
                    <!-- Display other details of the announcement -->
                </div>
            @endforeach
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group me-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-primary">1</button>
                    <button type="button" class="btn btn-primary">2</button>
                    <button type="button" class="btn btn-primary">3</button>
                    <button type="button" class="btn btn-primary">4</button>
                </div>
            </div>
    </section>

    <!-- Footer -->
    <footer style="background-color: #1E0A0A; color: white; padding: 20px;">
        <div>
            <p>Jika ada ketidakcocokan data akademik, silahkan menghubungi kantor BAA (U-203).</p>
            <p>Jika ada ketidakcocokan data keuangan, silahkan menghubungi kantor BAU (E-102).</p>
            <p>Jika ada block perwalian karena PMB, silahkan menghubungi kantor PMB (gedung E).</p>
            <p>Jika ada gangguan situs, silahkan menghubungi Staff IT (E-501).</p>
            <p>Jika anda memiliki saran dan kritik, silahkan menghubungi Staff IT (E-501)</p>
        </div>
        <div>
            <p>Hotline Biro Administrasi Umum (BAU) : WA (0895 10100 888)</p>
            <p>Hotline Biro Administrasi Akademik (BAA) : WA (0878 9090 8955)</p>
            <p>Hotline Biro Administrasi Kemahasiswaan (BAK) : WA (081 333 555 070)</p>
            <p>Hotline Penerimaan Mahasiswa Baru (PMB) : Telpon (031 503 1818) / WA (0812 3353 3888)</p>
        </div>
        <div style="background-color: #360000; color: white; padding: 10px; text-align: center;">
            <p>2020 © Sistem Informasi Mahasiswa iSTTS</p>
        </div>
    </footer>
    </div>
    
@endsection
