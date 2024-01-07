@extends('layouts.Dosen')
@section('content')
    @php
        $jurusanMhs = session('jurusanMhs');
        if (empty($jurusanMhs)) {
            $mahasiswaCookie = json_decode(request()->cookie('mahasiswa'), true);
            $jurusanMhs = $mahasiswaCookie['jurusanMhs'] ?? null;
        }
    @endphp
    <div class="container">
        <div class="container bg-light">
            <h1 class="text-dark"><b>Daftar Mata Kuliah yang Diselenggarakan</b></h1>
            @if ($jurusanMhs == '11')
                <h3 class="text-dark">Jurusan Informatika</h3>
            @elseif ($jurusanMhs == '17')
                <h3 class="text-dark">Jurusan Desain Komunikasi Visual</h4>
                @elseif($jurusanMhs == '18')
                    <h3 class="text-dark">Jurusan Sistem Informasi Bisnis</h3>
            @endif
            <h2 class="text-dark">Semester GASAL (2023/2024) Kurikulum 2021</h2>

        </div>
        {{-- @if (count($jadwals) > 0)
            @foreach ($jadwals->sortBy('sms_matkul')->groupBy('sms_matkul') as $semester => $jadwals)
                <h3>Semester {{ $semester }}</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama Matkul</th>
                            <th scope="col">Jumlah SKS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwals as $jadwal)
                            <tr>
                                <td>{{ $jadwal->nama_matkul }}</td>
                                <td>{{ $jadwal->sks_matkul }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endforeach
        @else
            <p>Tidak ada jadwal kuliah.</p>
        @endif --}}
    </div>
@endsection
