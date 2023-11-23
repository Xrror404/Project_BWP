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
                    <h5 class="card-title"> Point Kemahasiswaan </h5>
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
    {{-- </div> --}}

    <!-- Footer -->
    <footer style="background-color: #1E0A0A; color: white; padding: 20px;">
        <div>
            <p>Jika ada ketidakcocokan data akademik, silahkan menghubungi kantor BAA (U-203).</p>
            <p>Jika ada ketidakcocokan data keuangan, silahkan menghubungi kantor BAU (E-102).</p>
            <p>Jika ada block perwalian karena PMB, silahkan menghubungi kantor PMB (gedung E).</p>
            <p>Jika ada gangguan situs, silahkan menghubungi Staff IT (E-501).</p>
            <p>Jika anda memiliki saran dan kritik, silahkan menghubungi Staff IT (E-501)</p>
        </div>
        <div>
            <p>Hotline Biro Administrasi Umum (BAU) : WA (0895 10100 888)</p>
            <p>Hotline Biro Administrasi Akademik (BAA) : WA (0878 9090 8955)</p>
            <p>Hotline Biro Administrasi Kemahasiswaan (BAK) : WA (081 333 555 070)</p>
            <p>Hotline Penerimaan Mahasiswa Baru (PMB) : Telpon (031 503 1818) / WA (0812 3353 3888)</p>
        </div>
        <div style="background-color: #360000; color: white; padding: 10px; text-align: center;">
            <p>2020 © Sistem Informasi Mahasiswa iSTTS</p>
        </div>
    </footer>

    </div>
@endsection
