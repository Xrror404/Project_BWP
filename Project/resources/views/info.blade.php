@extends('layouts.SIM')


{{-- @section('header')
    <div class="container">
        <!-- Header -->
        <header>
            <img src="../Assets/logoistts.png" alt="" style="height: 2vw; height: 2vw">
            <h1>Sistem Informasi Mahasiswa</h1>
        </header>
    </div>
@endsection --}}

{{-- @section('sidebar')

@endsection --}}

@section('content')
    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group me-2" role="group" aria-label="First group">
            <button type="button" class="btn btn-custom">Semester 1</button>
            <button type="button" class="btn btn-custom">Semester 2</button>
            <button type="button" class="btn btn-custom">Semester 3</button>
            <button type="button" class="btn btn-custom">Semester 4</button>
            <button type="button" class="btn btn-custom">Semester 5</button>
            <button type="button" class="btn btn-custom">Semester 6</button>
            <button type="button" class="btn btn-custom">Semester 7</button>
            <button type="button" class="btn btn-custom">Semester 8</button>
        </div>
    </div>
    <div class="container">
        @if (count($jadwals) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama Matkul</th>
                        <th scope="col">Jumlah SKS</th>
                        <th scope="col">Semester Mata Kuliah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jadwals as $jadwal)
                        <tr>
                            <td>{{ $jadwal->nama_matkul }}</td>
                            <td>{{ $jadwal->sks_matkul }}</td>
                            <td>{{ $jadwal->sms_matkul }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Tidak ada jadwal kuliah.</p>
        @endif
    </div>
@endsection
