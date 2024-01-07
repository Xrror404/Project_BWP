@extends('layouts.Admin')

@section('content')
    <div class="container bg-primary">
        <h1>Filter</h1>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID User</th>
                        <th>Nama</th>
                        <th>Email User</th>
                        <th>Nomor Telepon</th>
                        <th>Role User</th>
                        <th>Username User</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $mhs)
                        <tr>
                            <td>{{ $mhs->id_user }}</td>
                            <td>{{ $mhs->nama_user }}</td>
                            <td>{{ $mhs->email_user }}</td>
                            <td>{{ $mhs->nmrtlp }}</td>
                            <td>
                                @if ($mhs->role_user == 0)
                                    <p>Mahasiswa</p>
                                @else
                                    <p>Dosen</p>
                                @endif
                            </td>
                            <td>{{ $mhs->user_username }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
