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

    {{-- </div> --}}
    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group me-2" role="group" aria-label="First group">
            <button type="button" class="btn btn-primary">semester 1</button>
            <button type="button" class="btn btn-primary">semester 2</button>
            <button type="button" class="btn btn-primary">semester 3</button>
            <button type="button" class="btn btn-primary">semester 4</button>
            <button type="button" class="btn btn-primary">semester 5</button>
            <button type="button" class="btn btn-primary">semester 6</button>
            <button type="button" class="btn btn-primary">semester 7</button>
            <button type="button" class="btn btn-primary">semester 8</button>
        </div>
    </div>
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
