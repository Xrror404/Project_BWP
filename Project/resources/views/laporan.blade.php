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
    <!-- Display student data if available -->
    {{-- <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title"> Laporan Nilai Periode </h5>
                </div>
                <div class="col-md-6 text-right">
                    <h6 class="card-title">IP Periode</h6>
                    <h6 class="card-title">SKS Periode</h6>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container">
        <h1>Your Nilai</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Matkul</th>
                    <th>Nilai UTS</th>
                    <th>Nilai UAS</th>
                    <th>Nilai Akhir</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($nilai as $item)
                    <tr>
                        <td>{{ $item->matkul->nama_matkul }}</td>
                        <td>{{ $item->nilai_uts }}</td>
                        <td>{{ $item->nilai_uas }}</td>
                        <td>{{ $item->nilai_akhir }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No records found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
