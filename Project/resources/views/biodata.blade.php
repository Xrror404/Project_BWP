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
                <div class="row">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ Asset('Assets/profile.jpg') }}" alt="Profile Image">
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-primary" style="width: 150px;">
                                        <img src="{{ Asset('Assets/undo.png') }}" alt="Undo Icon" style="width: 20px;">
                                        DOWNLOAD FOTO
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-primary" style="width: 150px;">
                                        <img src="{{ Asset('Assets/pensil.jpg') }}" alt="Pencil Icon" style="width: 20px;">
                                        Edit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-around;">
                        <div style="text-align: center;">
                            <h1 style="color: white;">-</h1>
                            <h2>-</h2>
                        </div>
                        <div style="text-align: center;">
                            <h1 style="color: white;">-</h1>
                            <h2>-</h2>
                        </div>
                        <div style="text-align: center;">
                            <h1 style="color: white;">-</h1>
                            <h2>-</h2>
                        </div>
                        <div style="text-align: center;">
                            <h1 style="color: white;">-</h1>
                            <h2>-</h2>
                        </div>
                    </div>

                    <div class="col-md-6 text-right" style="background-color: black">
                        <h1 style="color: white">BIO DATA:</h1>
                        <h2>Alamat:</h2>
                        <h3>Email:</h3>
                        <h3>Email ISTTS:</h3>
                        <h3>Telepone/HP:</h3>
                        <h3>Tanggal lahir:</h3>
                        <h3>Agama:</h3>
                        <h3>Jenis kelamin:</h3>
                        <h3>Status nikah:</h3>
                    </div>
                    <div class="col-md-6 text-right"style="background-color: blue">
                        <h1 style="color: white">Orang tua:</h1>
                        <h1 style="color: white">Nama:</h1>
                        <h2>Alamat:</h2>
                        <h3>Telepone/HP:</h3>
                    </div>
                    <div class="col-md-6 text-right"style="background-color: yellow">
                        <h1 style="color: white">Status akademis:</h1>
                        <h1 style="color: white">Dosen wali:</h1>
                        <h2>Major:</h2>
                        <h3>Status:</h3>
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
