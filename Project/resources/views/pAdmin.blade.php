@extends('layouts.Admin')


@section('content')
    <div class="container p-2"style="background-color: #360000;">
        <div class="row p-1">
            <div class="col-md-6 p-1">
                <h1 class="text-light">Pengaturan</h1>
            </div>
            <div>
                <button class="text-black h4" onclick="kdosen('info9', event)"><img src="{{ Asset('Assets/upload.jpg') }}"
                        alt="" width="50vw" height="50vh"><span>upload file baru </span>
                </button>
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
