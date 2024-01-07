@extends('layouts.Admin')


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
                    <h5 class="card-title">Silakan Tambahakan MAHASISWA Baru </h5>
                </div>
                <form id="matkulForm" style="color: white">
                    <label for="idMatkul">ID Matkul:</label>
                    <input type="text" id="idMatkul" name="idMatkul" required>

                    <label for="namaMatkul">Nama Matkul:</label>
                    <input type="text" id="namaMatkul" name="namaMatkul" required>

                    <label for="jurusan">Jurusan:</label>
                    <label><input type="checkbox" name="jurusan" value="DKV"> DKV</label>
                    <label><input type="checkbox" name="jurusan" value="Informatika"> Informatika</label>
                    <label><input type="checkbox" name="jurusan" value="SIB"> SIB</label>
                    <label><input type="checkbox" name="jurusan" value="Industri"> Industri</label>

                    <label for="sks">Jumlah SKS:</label>
                    <input type="number" id="sks" name="sks" min="1" required>


                </form>

            </div>
        </div>
    </div>
    <a href="{{ route('admin') }}"> <button style="background-color: blue">
            Submit
        </button></a>
@endsection
