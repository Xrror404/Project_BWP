<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem ISTTS - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        header {
            background-color: #360000;
            color: white;
            padding: 1%;
            display: flex;
            position:inherit;
            margin-left: 5em;
        }

        .sidebar div {
            background-color: #360000;
            color: white;
            padding: 10px;
        }

        .sidebar {
            width: 250px;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #f0f0f0;
            padding-top: 20px;
        }

        /* Style the content area */
        .content {
            margin-left: 250px;
            /* Adjust according to the sidebar width */
            padding: 20px;
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

<body class="bg-dark">
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar p-0 bg-dark">
                {{-- @yield('sidebar') --}}
                <div class="container">
                    @yield("DataMhs")
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
                                <button class="text-black h4" onclick="toggleInfo('info9', event)">Kontak Dosen</button>
                            </div>
                        </div>


                    </div>
                </nav>
            </div>
        </div>
        <div class="col-md-9">

        </div>
    </div>
    <!-- Include the content from sections -->
    <div class="container-fluid">
        <!-- Header -->
        <header>
            <div class="container p-0 justify-content-center">
                <img src="../Assets/logoistts.png" alt="" style="height: 2vw; height: 2vw">
                <h1>Sistem Informasi Mahasiswa</h1>
            </div>
        </header>
        <div class="content bg-dark">
            @yield('content')
        </div>
    </div>




    <!-- Your JavaScript code -->
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
        function redirectToPoint() {
            window.location.href = 'point';
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
