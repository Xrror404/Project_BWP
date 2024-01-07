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
                <div class="col-md-15" style="color: white">
                    <H1>Selamat datang di pengisian FRS 2024 silakan mengisi data kuliah yang mau di ambil</H1>
                </div>
                <div style="color: white">
                    <h6>Semester GASAL 2023/2024</h6>
                </div>
                <div style="color: white">
                    <h1>Semster 4:</h1>
                </div>
                <div style="display: flex;">
                    <div style="flex: 1; color: white">
                        <h1> Nama Matkul</h1>
                        <br>
                        <h1>Analisa dan Desain Sistem Berorientasi Objek</h1>
                        <br>
                        <h1>Grafika Komputer</h1>
                        <br>
                        <h1>Jaringan Komputer</h1>
                        <br>
                        <h1>Sistem Digital</h1>
                        <br>
                        <h1>Agama</h1>
                        <br>
                        <h1>Statika Terapan</h1>
                        <br>
                        <h1>Web Programming Framework</h1>
                    </div>
                    <div style="flex: 1;color: white">
                        <h1> Jumlah SKS</h1>
                        <br>
                        <h1>3</h1>
                        <br>
                        <br>
                        <br>

                        <h1>3</h1>
                        <br>
                        <h1>3</h1>
                        <br>
                        <h1>3</h1>
                        <br>
                        <h1>2</h1>
                        <br>
                        <h1>3</h1>
                        <br>
                        <h1>3</h1>

                    </div>
                    <div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <input type="checkbox" id="checkbox1" name="checkbox1"
                            style=" width: 20px
                        height: 20px;">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <input type="checkbox" id="checkbox1" name="checkbox1">
                        <br>
                        <br>
                        <br>
                        <br>
                        <input type="checkbox" id="checkbox1" name="checkbox1">
                        <br>
                        <br>
                        <br>
                        <br>
                        <input type="checkbox" id="checkbox1" name="checkbox1">

                        <br>
                        <br>
                        <br>
                        <input type="checkbox" id="checkbox1" name="checkbox1">

                        <br>
                        <br>
                        <br>
                        <input type="checkbox" id="checkbox1" name="checkbox1">

                        <br>
                        <br>
                        <br>
                        <input type="checkbox" id="checkbox1" name="checkbox1">
                        <br>
                    </div>
                </div>
                <a href="{{ route('pengisianecc') }}"><button style="background-color: red">Next</button></a>

            </div>
        </div>
    </div>
@endsection
