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
    {{-- <div class="container"> --}}
    <!-- Display student data if available -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Jadwal Dosen Mengajar</h5>
                </div>
                <div class="col-md-6 text-right">
                    <br>
                    <br>
                </div>
            </div>

            <!-- Kontak Dosen Section -->
            <div class="mt-4">
                <h5 class="mb-3">Kontak Dosen</h5>

                <!-- Informasi Kontak Dosen -->
                <div class="row">
                    <div class="col-md-3">
                        <!-- Gambar Dosen (Ganti dengan foto dosen) -->
                        <img src="{{ asset('path-to-your-image.jpg') }}" alt="Foto Dosen" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <ul class="list-group" style="background-color: black">
                            <li class="list-group-item">
                                <strong>Nama:</strong> Nama Dosen Anda<br>
                                <strong>Email:</strong> email@example.com<br>
                                <strong>Nomor Telepon:</strong> 123456789
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
