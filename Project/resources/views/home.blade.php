@extends('layouts.app') <!-- Assuming you have a master layout -->

@section('content')
    <div class="container">
        <!-- Header -->
        <header>
            <h1>SISTEM ISTTS</h1>
            <!-- Your logo here -->
        </header>

        <!-- Sidebar -->
        <aside>
            <!-- User's name and nrp -->
            <div>
                <!-- Retrieve the user's name and nrp from the database -->
                <p>{{ $userData->nama_mhs }}</p>
                <p>{{ $userData->nrp_mhs }}</p>
            </div>
            <!-- Sidebar menu -->
            <ul>
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <!-- Add other sidebar options here -->
                <!-- Poin, Akademi, Jadwal, Rencana Studi, Kontak Dosen -->
            </ul>
        </aside>

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
@endsection
