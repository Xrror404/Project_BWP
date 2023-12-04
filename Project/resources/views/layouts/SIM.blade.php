<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Sistem ISTTS - Home</title>
    <link rel="icon" href="../Assets/logoistts.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        #headerContainer {
            background-color: #360000;
            color: white;
            padding: 2vh;
            display: flex;
            align-items: center;
        }

        #DropDownButton .dropdown-menu .dropdown-item:hover {
            background-color: rgba(108, 117, 125, 0.75) !important;
        }


        .sidebar div {
            background-color: #360000;
            color: white;
            padding: 10px;
        }

        .sidebar {
            width: 16vw;
            height: 100vh;
            position: absolute;
            top: 0;
            left: 0;
            background-color: #f0f0f0;
            padding-top: 20px;
        }

        /* Style the content area */
        .content {
            margin-left: 0%;
            padding: 2vw;
        }

        /* Style the sidebar links */
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
        }

        .sidebar ul li a:hover {
            color: #360000;
        }

        .bg-dark {
            background-color: #343a40;
        }

        .p-4 {
            padding: 1rem;
        }

        button {
            display: block;
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 0.5rem;
            background-color: #495057;
            color: #ffffff;
            border: none;
            text-align: left;
            cursor: pointer;
        }

        button:hover {
            background-color: #6c757d;
        }

        .h4 {
            font-size: 1.2rem;
            margin: 0;
        }

        .additional-info {
            display: none;
            /* Add styling for the additional information */
        }

        button.active {
            font-weight: bold;
            background-color: #ffc107;
            /* Yellow background color for active button */
        }

        .card {
            margin-top: 5px;
            /* Adjust the margin as needed */
            background-color: #360000;
            /* Card background color */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            /* Card box shadow */
        }

        .card-body {
            padding: 1.25rem;
            /* Adjust padding as needed */
        }

        .card-title {
            font-size: 1.25rem;
            /* Adjust font size as needed */
            color: white;
            /* Card title color */
        }

        .card-text {
            color: white;
            /* Card text color */
        }

        .btn-primary {
            background-color: #007bff;
            /* Primary button background color */
            border-color: #007bff;
            /* Primary button border color */
        }

        .btn-primary:hover {
            background-color: #0056b3;
            /* Primary button background color on hover */
            border-color: #0056b3;
            /* Primary button border color on hover */
        }

        .announcement-card {
            border: 2px solid #fff;
            background-color: #360000;
            padding: 10px;
            border-radius: 10px;
            /* Rounded corners, adjust as needed */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Box shadow for a subtle lift, adjust as needed */
        }

        .announcement-content {
            /* Add any additional styles for the announcement content here */
        }

        .announcement-item {
            border: 1px solid #fff;
            margin-bottom: 15px;
            padding: 15px;
            border-radius: 5px;
            background-color: #333;
            /* Background color for each item, adjust as needed */
            color: #fff;
            /* Text color, adjust as needed */
            transition: background-color 0.3s ease;
            /* Smooth background color transition */
        }

        .announcement-item:hover {
            background-color: #555;
            /* Background color on hover, adjust as needed */
        }

        h2,
        h3 {
            color: #fff;
        }
    </style>
</head>

<body class="bg-black p-0">
    <div class="row p-0">
        <div class="col-md-2 pt-0">
            <div class="sidebar p-0 bg-dark">
                <div class="container-fluid p-0">
                    @php
                        $namaMhs = session('nama_user');
                        $nrpMhs = session('user_username');
                    @endphp

                    <div class="card p-0" style="width: auto;"id="UserCard">
                        <div class="container d-flex p-3">
                            <div class="card rounded-circle bg-secondary"style="width:4vw;height:8vh;cursor:pointer;">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $namaMhs }}</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="card-text">{{ $nrpMhs }}</p>
                                <div class="dropdown">
                                    <span style="cursor: pointer;" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        &#9660; <!-- Tombol arrow ke bawah -->
                                    </span>
                                    <div class="dropdown-menu bg-light dropdown-menu-right"
                                        aria-labelledby="dropdownMenuButton" id="DropDownButton">
                                        <button class="dropdown-item" type="button">Biodata</button>
                                        <button class="dropdown-item" type="button"
                                            onclick="redirectToLogin()">Logout</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-dark bg-dark p-0">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <br>
                        <br>
                        <div class="collapse" id="navbarToggleExternalContent">
                            <div class="bg-dark p-4">
                                <button class="text-black h4" onclick="redirectToHome()">Beranda</button>
                                <button id="pointButton" class="text-black h4"
                                    onclick="redirectToPoint()">Point</button>
                                {{-- <a href="{{ route('poin.index', ['id_user' => $id_user]) }}">Ke halaman poin</a> --}}

                                <button class="text-black h4" onclick="toggleInfo('info3', event)">Akademik</button>
                                <div class="additional-info" id="info3">
                                    <button class="text-black h4" onclick="redirectToInfo()">Informasi Mata</button>
                                    <button class="text-black h4" onclick="laporan()">laporan Nilai</button>
                                    <button class="text-black h4" onclick="transkip()">Transkip Nilai</button>
                                    <button class="text-black h4" onclick="grafik()">Grafik</button>
                                </div>
                                <button class="text-black h4" onclick="toggleInfo('info4', event)">Jadwal</button>
                                <div class="additional-info" id="info4">
                                    <button class="text-black h4" onclick="jkuliah()">Jadwal Kuliah</button>
                                    <button class="text-black h4" onclick="jujian()">Jadwal Ujian</button>
                                    <button class="text-black h4" onclick="jdosen()">Jadwal Dosen</button>
                                </div>
                                <button class="text-black h4" onclick="toggleInfo('info5', event)">Rencana
                                    Studi</button>
                                <div class="additional-info" id="info5">
                                    <button class="text-black h4" onclick="frs()">Pengisian FRS</button><button
                                        class="text-black h4" onclick="batal()">Batal Tambah</button>
                                    <button class="text-black h4" onclick="drop()">Drop</button>
                                    <button class="text-black h4" onclick="krs()">Download KRS</button>
                                </div>
                                <button class="text-black h4" onclick="toggleInfo('info6', event)">Laporan
                                    Keuangan</button>
                                <button class="text-black h4" onclick="toggleInfo('info7', event)">TA/Tesis</button>
                                <div class="additional-info" id="info7">
                                    <button class="text-black h4" onclick="ta()">History TA/Tesis</button>
                                </div>
                                <button class="text-black h4" onclick="toggleInfo('info8', event)">Pengaturan</button>
                                <button class="text-black h4" onclick="toggleInfo('info9', event)">Kontak
                                    Dosen</button>
                            </div>
                        </div>


                    </div>
                </nav>
            </div>
        </div>
        <div class="col-md-10 p-0">
            <div class="container-fluid m-0 p-0">
                <div class="container-fluid" id="headerContainer">
                    <img src="../Assets/logoistts.png" alt="" style="height: 2vw; height: 6vh;">
                    <h1 class="ms-3 mb-0">Sistem Informasi Mahasiswa</h1>
                </div>
                <div class="content bg-dark pb-0">
                    @yield('content')
                </div>
                <footer class="mt-5"style="background-color: #1E0A0A; color: white; padding: 20px;">
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
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        function handleButtonClick(event) {
            event.preventDefault();
        }

        function toggleInfo(infoId) {
            // Toggle the visibility of the additional information
            var infoElement = document.getElementById(infoId);
            if (infoElement) {
                infoElement.style.display = infoElement.style.display === 'none' ? 'block' : 'none';
            }

            // Toggle the active class for the clicked button
            var clickedButton = document.querySelector('.active');
            if (clickedButton) {
                clickedButton.classList.remove('active');
            }

            var currentButton = event.currentTarget;
            currentButton.classList.add('active');
        }

        function redirectToHome() {
            window.location.href = '{{ route('home') }}';
        }

        function redirectToLogin() {
            window.location.href = '{{ route('login') }}';
        }

        function redirectToPoint() {
            window.location.href = '{{ route('point') }}';
        }

        function redirectToInfo() {
            window.location.href = '{{ route('info') }}';
        }

        function laporan() {
            window.location.href = '{{ route('laporan') }}';
        }

        function transkip() {
            window.location.href = '{{ route('transkip') }}';
        }

        function grafik() {
            window.location.href = '{{ route('grafik') }}';
        }

        function jkuliah() {
            window.location.href = '{{ route('jkuliah') }}';
        }

        function jujian() {
            window.location.href = '{{ route('jujian') }}';
        }

        function jdosen() {
            window.location.href = '{{ route('jdosen') }}';
        }

        function frs() {
            window.location.href = '{{ route('frs') }}';
        }

        function batal() {
            window.location.href = '{{ route('batal') }}';
        }

        function drop() {
            window.location.href = '{{ route('drop') }}';
        }

        function krs() {
            window.location.href = '{{ route('krs') }}';
        }

        function ta() {
            window.location.href = '{{ route('ta') }}';
        }
    </script>

</body>

</html>
