@extends('layouts.SIM')
@section('content')
    <div class="container">
        @if (count($jadwals) > 0)
            @foreach ($jadwals->sortBy('sms_matkul')->groupBy('sms_matkul') as $semester => $jadwals)
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
