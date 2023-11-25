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
            <section class="announcement-card p-0">
                <div class="container-fluid p-0 align-items-left"style="border-bottom: 0.5vh solid #fff;margin-bottom:2vh;">
                    <div class="container"style="padding:2vh;">
                        <h2 class="text-light">Pengumuman</h2>
                    </div>
                </div>
                <div class="container-fluid"style="margin-left:1vw;width:auto;margin-right:1vw;">
                    @foreach ($announcements as $announcement)
                        <div class="announcement-item">
                            <h3>{{ $announcement->judul_pengumuman }}</h3>
                        </div>
                    @endforeach
                    {{ $announcements->onEachSide(1)->links('pagination.Announcement_pagination') }}
                </div>
            </section>
        </div>
        <div class="col-md-4">
            <section class="announcement-card p-0"style="margin-bottom:2vh;">
                <div class="container-fluid p-0"style="border-bottom: 0.5vh solid #fff;">
                    <div class="container"style="padding:2vh;">
                        <h2 class="text-light">Reminder</h2>
                    </div>
                </div>
                <div
                    class="container-fluid bg-secondary"style="margin-left:1vw;width:auto;margin-right:1vw;margin-top: 2vh;">
                    <h4 class="text-light">Poin Kemahasiswaan Anda: </h4>
                    <p class="text-light"><i>(Minimal harus terkumpul 1500)</i></p>
                </div>
                <div class="container-fluid" style="margin-left:1vw;width:auto;">
                    <p class="text-light"><i>(*) Untuk informasi lengkap mengenai SKPI dan Poin Kemahasiswaan, dapat
                            menghubungi Biro Administrasi Kemahasiswaan atau akses kemahasiswaan.istts.ac.id</i></p>
                </div>
            </section>
            <section class="announcement-card p-0">
                <div class="container-fluid p-0"style="border-bottom: 0.5vh solid #fff;margin-bottom:2vh;">
                    <div class="container"style="padding:2vh;">
                        <h2 class="text-light">File Penting</h2>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="container-fluid p-0">
                        @foreach ($ImportantFile as $importantFile)
                        <div class="announcement-item">
                            <h5 class="file-link" data-file="{{ $importantFile->isi_file }}">{{ $importantFile->nama_file }}</h5>
                        </div>
                        @endforeach
                        {{ $announcements->onEachSide(1)->links('pagination.Announcement_pagination') }}
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var fileLinks = document.querySelectorAll('.file-link');
    
            fileLinks.forEach(function (link) {
                link.addEventListener('click', function () {
                    var fileUrl = link.getAttribute('data-file');
                    window.location.href = fileUrl;
                });
            });
        });
    </script>
@endsection
