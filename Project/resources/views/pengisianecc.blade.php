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
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Pengisian ECC</h5>
                </div>
                <div style="color: white">
                    <h6>Semester GASAL 2023/2024</h6>
                </div>
                <a href="{{ route('pengisianfrs') }}">
                    <button style="background-color: red">waktu nya pengisian FRS</button>
                </a>
            </div>
        </div>
    </div>
@endsection
