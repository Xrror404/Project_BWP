@extends('layouts.SIM')


@section('header')
    <div class="container">
        <!-- Header -->
        <header>
            <img src="../Assets/logoistts.png" alt="" style="height: 2vw; height: 2vw">
            <h1>Sistem Informasi ISTTS</h1>
        </header>
    </div>
@endsection

@section('sidebar')
    @isset($studentData)
        <div class="container">
            <aside>
                <!-- User's name and nrp -->
                <div>
                    <p>{{ $studentData->nama_mhs }}</p>
                    <p>{{ $studentData->nrp_mhs }}</p>
                </div>
                <!-- Sidebar menu -->
                <ul>
                    {{-- <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('poin') }}">Poin</a></li> --}}
                    <!-- Add other sidebar options here -->
                    <!-- Poin, Akademi, Jadwal, Rencana Studi, Kontak Dosen -->
                </ul>
            </aside>
        </div>
    @endisset
@endsection

@section('content')
    <div class="container">
        <!-- Display student data if available -->

        <!-- User Points Section -->
        <section class="user-points-section">
            <h2>Poin Kemahasiswaan</h2>
            <div class="user-points-content">
                @if ($userPoints)
                    <div class="user-points-item">
                        <p>Poin Minat Bakat: {{ $userPoints->poin_minatbakat }}</p>
                        <p>Poin Penalaran: {{ $userPoints->poin_penalaran }}</p>
                        <p>Poin Organisasi: {{ $userPoints->poin_organisasi }}</p>
                        <p>Poin Kerohanian: {{ $userPoints->poin_kerohanian }}</p>
                    </div>
                @endif
            </div>
        </section>
    </div>
@endsection
