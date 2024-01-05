@extends('layouts.SIM')

@section('content')
    <!-- Display student data if available -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Jadwal Dosen Mengajar</h5>
                </div>
                <div class="col-md-6 text-right">


                </div>
            </div>

            <!-- Kontak Dosen Section -->
            <div class="mt-4">
                <!-- Informasi Kontak Dosen -->
                <div class="row">
                    <div class="col-md-9">
                        <ul class="list-group" style="background-color: black">
                            <li class="list-group-item">
                                @foreach ($users as $dosen)
                                    <strong>Nama: {{ $dosen->nama_user ?? 'NA' }}</strong> <br>
                                    <strong>Email: {{ $dosen->email_user ?? 'NA' }}</strong> <br>
                                    <strong>Nomor Telepon: {{ $dosen->nmrtlp ?? 'NA' }} </strong><br><br>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
