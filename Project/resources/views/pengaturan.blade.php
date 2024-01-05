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
                <div style="float: left; width: 50%;color: white;">
                    <h1>Notifikasi</h1>
                    <br>
                    <br>
                    <h2 style="color: white">Pengumuman baru</h2>
                    <br>
                    <br>
                    <h3 style="color: white">Pengingat pembayaran</h3>
                </div>
                <div style="float: left; width: 30%;color: white;">
                    <h1>Push Notification</h1>
                    <button id="aktivasiButton" style="background-color: red" onclick="showNotification()">Aktivasi</button>
                    <br> <!-- Line break untuk memberikan jarak antara tombol dan checkbox -->
                    <input type="checkbox" id="notificationCheckbox" style="transform: scale(1.5);">
                    <!-- Menggunakan transform untuk memperbesar checkbox -->
                    <label for="notificationCheckbox"></label>
                    <br>
                    <br>
                    <br> <!-- Line break untuk memberikan jarak antara tombol dan checkbox -->
                    <input type="checkbox" id="notificationCheckbox" style="transform: scale(1.5);">
                    <!-- Menggunakan transform untuk memperbesar checkbox -->
                    <label for="notificationCheckbox"></label>
                </div>


                <div style="float: left; width: 20%;color: white;">
                    <h1>Email</h1>
                    <br>
                    <br>
                    <br> <!-- Line break untuk memberikan jarak antara tombol dan checkbox -->
                    <input type="checkbox" id="notificationCheckbox" style="transform: scale(1.5);">
                    <!-- Menggunakan transform untuk memperbesar checkbox -->
                    <label for="notificationCheckbox"></label>
                    <br>
                    <br>
                    <br> <!-- Line break untuk memberikan jarak antara tombol dan checkbox -->
                    <input type="checkbox" id="notificationCheckbox" style="transform: scale(1.5);">
                    <!-- Menggunakan transform untuk memperbesar checkbox -->
                    <label for="notificationCheckbox"></label>
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

        function showNotification() {
            // Cek apakah browser mendukung notifikasi
            if ('Notification' in window) {
                Notification.requestPermission().then(function(permission) {
                    if (permission === 'granted') {
                        // Tampilkan notifikasi
                        var notification = new Notification('Pemberitahuan', {
                            body: 'Oke, Anda akan diberi pengingat.',
                        });
                    }
                });
            }
        }
    </script>
@endsection
