<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem ISTTS - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Style the sidebar */
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
            color: #007bff;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <h1>Sistem ISTTS</h1>
            <!-- Your logo or additional header content here -->
        </div>
    </header>

    <!-- Sidebar -->
    <div class="sidebar">
        <h1 class="text-blue-700">KONTOL</h1>
        <!-- Display student data if available -->
        @isset($studentData)
            <div>
                <p>{{ $studentData->nama_mhs }}</p>
                <p>{{ $studentData->nrp_mhs }}</p>
            </div>
            <ul>
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <!-- Add other sidebar options here -->
                <!-- Poin, Akademi, Jadwal, Rencana Studi, Kontak Dosen -->
            </ul>
        @endisset
    </div>

    <!-- Main Content Area -->
    <div class="content">
        <!-- Announcement Card -->
        <section class="announcement-card">
            <h2>Announcement</h2>
            <div class="announcement-content">
                @foreach ($announcements as $announcement)
                    <div class="announcement-item">
                        <h3>{{ $announcement->judul_pengumuman }}</h3>
                        <!-- Display other details of the announcement -->
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <!-- Your footer content -->
        </footer>
    </div>

    <!-- Include your JavaScript files or CDN links here -->

    <!-- Your JavaScript code -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
