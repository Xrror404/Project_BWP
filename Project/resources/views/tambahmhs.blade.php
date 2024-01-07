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
                <form id="userForm" style="color: white">
                    <label for="id_user">ID Pengguna:</label>
                    <input type="text" id="id_user" name="id_user" required>

                    <label for="nama_user">Nama Pengguna:</label>
                    <input type="text" id="nama_user" name="nama_user" required>

                    <label for="email_user">Email Pengguna:</label>
                    <input type="email" id="email_user" name="email_user" required>

                    <label for="nmrtlp">Nomor Telepon:</label>
                    <input type="tel" id="nmrtlp" name="nmrtlp" pattern="[0-9]{10,12}"
                        placeholder="Contoh: 081234567890" required>

                    <label for="user_username">Username:</label>
                    <input type="text" id="user_username" name="user_username" required>

                    <label for="user_password">Password:</label>
                    <input type="password" id="user_password" name="user_password" required>

                    <label for="user_added_date">Tanggal Pendaftaran:</label>
                    <input type="date" id="user_added_date" name="user_added_date" required>


                </form>
            </div>
        </div>
    </div>
    <a href="{{ route('admin') }}"> <button style="background-color: blue">
            Submit
        </button></a>
@endsection
