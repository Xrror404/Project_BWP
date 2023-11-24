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


        <!-- Footer -->
        <!-- Footer -->
        <footer style="background-color: #1E0A0A; color: white; padding: 20px;">
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
@endsection
