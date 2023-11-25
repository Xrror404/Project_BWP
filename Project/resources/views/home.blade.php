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
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-light">
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
                        </div>
                    @endforeach
                    {{ $announcements->onEachSide(1)->links('pagination.simple_pagination') }}
            </section>
        </div>
        <div class="col-md-4">
            <div class="container bg-danger">
                <h1>HALO GAISS</h1>
            </div>
        </div>
    </div>
@endsection
