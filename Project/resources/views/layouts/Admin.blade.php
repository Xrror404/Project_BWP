<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Sistem ISTTS</title>
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
            padding: 1vh 1vw;
        }

        .sidebar {
            width: 17vw;
            height: 100vh;
            padding-top: 0vh;
            position: absolute;
            margin-top: 0vh;
            left: 0;
            background-color: #f0f0f0;
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

        #sidebar {
            overflow-y: auto;
            height: 100vh;
            /* Set a fixed height for the sidebar */
        }

        #content {
            overflow-y: auto;
            height: 100vh;
            /* Set a fixed height for the content area */
            overflow-x: hidden;
            /* Hide horizontal scrollbar if needed */
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

        .btn-custom {
            background-color: #3498db;
            /* Warna latar belakang */
            color: #ffffff;
            /* Warna teks */
            border: 1px solid #2980b9;
            /* Warna border */
            border-radius: 5px;
            /* Sudut border */
            margin: 5px;
            /* Jarak antar tombol */
            transition: background-color 0.3s ease;
            /* Efek transisi hover */
        }

        .btn-custom:hover {
            background-color: #2980b9;
            /* Warna latar belakang saat hover */
        }

        body {
            transition: background-color 0.3s ease;
        }

        .dark-mode {
            background-color: #333;
            color: #fff;
        }

        body {
            font-family: Arial, sans-serif;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        button {
            margin-top: 10px;
        }
    </style>

</head>

<body class="bg-dark p-0">
    <div class="row m-0">
        <div id="sidebar" class="col-lg-2" style="padding: 0vh 0vw; margin: 0vh 0vw;">
            <div class="col-lg-2"style="padding:0vh 0vw;margin:0vh 0vw;">
                <div class="sidebar p-0"style="background-color: #360000;">
                    <div class="container p-0">
                        @php
                            $namaMhs = session('nama_user');
                            $nrpMhs = session('user_username');
                            if (empty($namaMhs) || empty($nrpMhs)) {
                                $mahasiswaCookie = json_decode(request()->cookie('mahasiswa'), true);
                                $namaMhs = $mahasiswaCookie['nama_user'] ?? null;
                                $nrpMhs = $mahasiswaCookie['user_username'] ?? null;
                            }
                        @endphp

                        <div class="card" style="width: auto; padding:0vh 0vw; margin:0vh 0vw;"id="UserCard">
                            <div class="container p-3">
                                <div
                                    class="card rounded-circle bg-secondary"style="width:4vw;height:8vh;cursor:pointer;">
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ Auth::user()->nama_user }}</h5>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="card-text">{{ Auth::user()->user_username }}</p>
                                    <div class="dropdown">
                                        <span style="cursor: pointer;" id="dropdownMenuButton" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            &#9660;
                                        </span>
                                        <div class="dropdown-menu bg-light dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton" id="DropDownButton">

                                            <button class="dropdown-item" type="button"
                                                onclick="logoutMethod()">Logout</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-dark bg-dark p-0">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarToggleExternalContent"
                                aria-controls="navbarToggleExternalContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>


                            <br>
                            <br>
                            <div class="collapse" id="navbarToggleExternalContent">
                                <div class="bg-dark p-4">

                                    <button class="text-black h4" onclick="redirectToHome()">
                                        <img src="{{ Asset('Assets/home.jpg') }}" alt="" width="50vw"
                                            height="50vh"> <span>Beranda</span>
                                    </button>

                                    <button class="text-black h4" onclick="pengaturan('info8', event)">
                                        <img src="{{ Asset('Assets/pengaturan.jpg') }}" alt="" width="50vw"
                                            height="50vh"><span>Pengaturan</span>
                                    </button>
                                    <button class="text-black h4" onclick="matkul('info8', event)">
                                        <img src="{{ Asset('Assets/tambah.png') }}" alt="" width="50vw"
                                            height="50vh"><span>matkul</span>
                                    </button>
                                    <button class="text-black h4" onclick="mahasiswa('info8', event)">
                                        <img src="{{ Asset('Assets/maha.png') }}" alt="" width="50vw"
                                            height="50vh"><span>mahasiswa</span>
                                    </button>
                                    <button class="text-black h4" onclick="luang('info6', event)"><img
                                            src="{{ Asset('Assets/uang.jpg') }}" alt="" width="50vw"
                                            height="50vh"><span>Laporan Keuangan mahasiswa</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div id="content" class="col-lg-10 p-0 m-0">
            <div class="container-fluid m-0 p-0">

                <div class="container-fluid m-0 p-0">
                    <div class="container-fluid" id="headerContainer">
                        <img src="../Assets/logoistts.png" alt="" style="height: 6vh;">
                        <h1 class="ms-3 mb-0">Sistem Informasi Mahasiswa</h1>
                    </div>
                    <div class="content bg-dark"style="padding:3vh 2vw;">
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
                            <p>Hotline Penerimaan Mahasiswa Baru (PMB) : Telpon (031 503 1818) / WA (0812 3353 3888)
                            </p>
                        </div>
                        <div style="background-color: #360000; color: white; padding: 10px; text-align: center;">
                            <p>2020 © Sistem Informasi Mahasiswa iSTTS</p>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script>
    function handleButtonClick(event) {
        event.preventDefault();
    }

    function logoutMethod() {
        window.location.href = '{{ route('logout') }}';
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
        window.location.href = '{{ route('admin') }}';
    }


    function redirectToInfo() {
        window.location.href = '{{ route('infodosen') }}';
    }


    function jujian() {
        window.location.href = '{{ route('jujiandosen') }}';
    }

    function jkuliah() {
        window.location.href = '{{ route('jkuliahdosen') }}';
    }

    function pengaturan() {
        window.location.href = '{{ route('pAdmin') }}';
    }

    function luang() {
        window.location.href = '{{ route('luangmahasiswa') }}';
    }

    function matkul() {
        window.location.href = '{{ route('matkul') }}';
    }

    function mahasiswa() {
        window.location.href = '{{ route('mahasiswa') }}';
    }

    function redirectToBiodata() {
        window.location.href = '/biodatadosen'; // Gantilah dengan URL yang sesuai di aplikasi Anda
    }
</script>

</html>
