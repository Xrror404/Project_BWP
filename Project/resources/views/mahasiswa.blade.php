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
                    <h5 class="card-title">List Mahasiswa ISTTS</h5>
                </div>

                <table border="1" style="color: white">
                    <tr>
                        <th>Mahasiswa angkatan</th>
                        <th>2019</th>
                        <th>2020</th>
                        <th>2021</th>
                        <th>2022</th>
                        <th>2023</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <a href="{{ route('tambahmhs') }}"> <button style="background-color: blue">
            TAMBAH MAHASISWA ISTTS
        </button></a>
@endsection
