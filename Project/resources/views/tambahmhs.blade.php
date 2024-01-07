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
                <form id="inputForm">
                    <label for="nrp" style="color: white">NRP:</label>
                    <input type="text" id="nrp" name="nrp" required>

                    <label for="nama"style="color: white">Nama:</label>
                    <input type="text" id="nama" name="nama" required>

                    <label for="alamat"style="color: white">Alamat:</label>
                    <input type="text" id="alamat" name="alamat" required>
                    <label for="tanggalLahir" style="color: white">Tanggal Lahir:</label>
                    <input type="date" id="tanggalLahir" name="tanggalLahir" required>

                    <label for="telepon" style="color: white">Nomor Telepon:</label>
                    <input type="tel" id="telepon" name="telepon" pattern="[0-9]{10,12}"
                        placeholder="Contoh: 081234567890" required>


                    <label style="color: white">Jenis Kelamin:</label>
                    <label style="color: white"><input type="checkbox" name="gender" value="Pria"> Pria</label>
                    <label style="color: white"><input type="checkbox" name="gender" value="Wanita"> Wanita</label>
                    <label style="color: white">Jurusan:</label>
                    <label style="color: white"><input type="checkbox" name="jurusan" value="DKV"> DKV</label>
                    <label style="color: white"><input type="checkbox" name="jurusan" value="Informatika">
                        Informatika</label>
                    <label style="color: white"><input type="checkbox" name="jurusan" value="SIB"> SIB</label>
                    <label style="color: white"><input type="checkbox" name="jurusan" value="Industri"> Industri</label>



                </form>

            </div>
        </div>
    </div>
    <a href="{{ route('admin') }}"> <button style="background-color: blue">
            Submit
        </button></a>
@endsection
