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
                    <h1 class="card-title"> Point Kemahasiswaan </h1>
                </div>
                <div class="col-md-6 text-right">
                    <h6 class="card-title">Cetak</h6>
                    <h6 class="card-title">Akumulasi Point:</h6>
                </div>
            </div>
        </div>
    </div>
    {{-- minat bakat nya yang card nya  --}}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Minat bakat</h5>
                    <p class="card-text">Tanggal:</p>
                    <p class="card-text">Kegiatan:</p>
                </div>

                <div class="col-md-6 text-right">
                    <p class="card-text">Point</p>
                </div>
            </div>
        </div>
    </div>
    {{-- penalaran card nya --}}
    <br>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Penalaran</h5>
                    <p class="card-text">Tanggal:</p>
                    <p class="card-text">Kegiatan:</p>
                </div>

                <div class="col-md-6 text-right">
                    <p class="card-text">Point</p>
                </div>
            </div>
        </div>
    </div>
    {{-- organisasi card nya --}}
    <br>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Organisasi</h5>
                    <p class="card-text">Tanggal:</p>
                    <p class="card-text">Kegiatan:</p>
                </div>

                <div class="col-md-6 text-right">
                    <p class="card-text">Point</p>
                </div>
            </div>
        </div>
    </div>
    {{-- kerohanian --}}
    <br>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Kerohanian</h5>
                    <p class="card-text">Tanggal:</p>
                    <p class="card-text">Kegiatan:</p>
                </div>

                <div class="col-md-6 text-right">
                    <p class="card-text">Point</p>
                </div>
            </div>
        </div>
    </div>
@endsection
