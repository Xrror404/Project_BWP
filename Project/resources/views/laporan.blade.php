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
                    <h5 class="card-title"> Laporan Nilai Periode </h5>
                </div>
                <div class="col-md-6 text-right">
                    <h6 class="card-title">IP Periode</h6>
                    <h6 class="card-title">SKS Periode</h6>
                </div>
            </div>
        </div>
    </div>
@endsection
