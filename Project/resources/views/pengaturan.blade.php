@extends('layouts.SIM')


@section('content')
    <div class="container p-2"style="background-color: #360000;">
        <div class="row p-1">
            <div class="col-md-6 p-1">
                <h1 class="text-light">Pengaturan</h1>
            </div>
            <div class="col-md-6 p-1">
                <button onclick="toggleMode()"class="btn btn-secondary">
                    <h4>Toggle Mode</h4>
                </button>
            </div>
        </div>
        <div class="row justify-content-center align-items-center m-2">
            <div class="col-md-6">
                <h3>Notifikasi</h3>
            </div>
            <div class="col-md-3 text-center p-0">
                <h4 class="text-light">Push Notification</h4>
                <button id="aktivasiButton" style="background-color: red"
                    onclick="showNotification()"class="btn text-light">AKTIVASI</button>
            </div>
            <div class="col-md-3 text-center">
                <h1 class="text-light">Email</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center m-2">
            <div class="col-md-6">
                <h3>Pengumuman Baru</h3>
            </div>
            <div class="col-md-3 text-center p-0">
                <input type="checkbox" id="notificationCheckbox" style="transform: scale(1.5);">
            </div>
            <div class="col-md-3 text-center">
                <input type="checkbox" id="notificationCheckbox" style="transform: scale(1.5);">
            </div>
        </div>
        <div class="row justify-content-center align-items-center m-2">
            <div class="col-md-6">
                <h3 style="color: white">Pengingat pembayaran</h3>
            </div>
            <div class="col-md-3 text-center p-0">
                <input type="checkbox" id="notificationCheckbox" style="transform: scale(1.5);">
            </div>
            <div class="col-md-3 text-center">
                <input type="checkbox" id="notificationCheckbox" style="transform: scale(1.5);">
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
                    // Tampilkan alert, baik izin notifikasi diberikan atau tidak
                    alert('Oke, Anda akan diberi pengingat.');
                });
            } else {
                // Jika browser tidak mendukung notifikasi, tampilkan alert
                alert('Oke, Anda akan diberi pengingat.');
            }
        }
    </script>
@endsection
