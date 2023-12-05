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
                    <h5 class="card-title">Pengaturan</h5>
                </div>
                <div class="col-md-6 text-right">
                    <h6 class="card-title">
                        <button onclick="toggleMode()">Toggle Mode</button>
                    </h6>
                </div>
            </div>
        </div>
    </div>

    <script>
        let darkModeEnabled = false;

        function toggleMode() {
            // Toggle dark mode variable
            darkModeEnabled = !darkModeEnabled;

            // Toggle body class for dark mode
            document.body.classList.toggle('dark-mode', darkModeEnabled);
        }
    </script>
@endsection
