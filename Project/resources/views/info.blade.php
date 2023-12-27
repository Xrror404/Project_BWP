@extends('layouts.SIM')
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
            @foreach ($jadwals->groupBy('sms_matkul') as $semester => $jadwals)
                <h3>Semester {{ $semester }}</h3>
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
            @endforeach
        @else
            <p>Tidak ada jadwal kuliah.</p>
        @endif
    </div>
@endsection
