@extends('layouts.Admin')

@section('content')
    <div class="container rounded"style="background-color: #360000;">
        <div class="row">
            <div class="col-md-1 m-2">
                <div class="container m-2">
                    <h1 class="text-light">Filter:</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 m-2 d-flex justify-content-center" style="width:15%;">
                    <div class="container m-2" style="width:100%;">
                        <button class="btn btn-primary" onclick="location.reload();">
                            <h4>All User</h4>
                        </button>
                    </div>
                </div>

                <div class="col-md-1 m-2 d-flex justify-content-center">
                    <div class="container m-2">
                        <div class="dropdown">
                            <span class="btn btn-danger" style="cursor: pointer;" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h3>Nama</h3>
                            </span>
                            <div class="dropdown-menu bg-light dropdown-menu-right" aria-labelledby="dropdownMenuButton"
                                id="DropDownButton">
                                <button class="dropdown-item" type="button" id="sortAscending">Ascending</button>
                                <button class="dropdown-item" type="button" id="sortDescending">Descending</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 m-2">
                    <div class="container m-2">
                        <div class="dropdown">
                            <span class= "btn btn-danger"style="cursor: pointer;" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h3>Role</h3>
                            </span>
                            <div class="dropdown-menu bg-light dropdown-menu-right" aria-labelledby="dropdownMenuButton"
                                id="DropDownButton">
                                <button class="dropdown-item" type="button" id="showMahasiswa">Mahasiswa</button>
                                <button class="dropdown-item" type="button" id="showDosen">Dosen</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 m-2">
                    <div class="container m-2">
                        <div class="dropdown">
                            <span class= "btn btn-danger"style="cursor: pointer;" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h3>Jurusan</h3>
                            </span>
                            <div class="dropdown-menu bg-light dropdown-menu-right" aria-labelledby="dropdownMenuButton"
                                id="DropDownButton">
                                <button class="dropdown-item" type="button" id="showInformatika">Informatika</button>
                                <button class="dropdown-item" type="button" id="showDKV">Desain Komunikasi
                                    Visual</button>
                                <button class="dropdown-item" type="button" id="showSIB">Sistem Informasi Bisnis</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 m-2">
                    <div class="container m-4">
                        <input type="text" id="searchBar" placeholder="Cari nama user...">
                    </div>
                </div>
            </div>



        </div>

        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID User</th>
                        <th>Nama</th>
                        <th>Email User</th>
                        <th>Nomor Telepon</th>
                        <th>Role User</th>
                        <th>Jurusan User</th>
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
                            <td>
                                @if ($mhs->id_jurusan == 11)
                                    <p>Informatika</p>
                                @elseif($mhs->id_jurusan == 17)
                                    <p>Desain Komunikasi Visual</p>
                                @elseif($mhs->id_jurusan == 18)
                                    <p>Sistem Informasi Bisnis</p>
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
@section('script')
    <script>
        document.querySelector('#sortAscending').addEventListener('click', function() {
            let table = document.querySelector('.table');
            let rows = Array.from(table.rows).slice(1);
            rows.sort((rowA, rowB) => rowA.cells[1].innerText > rowB.cells[1].innerText ? 1 : -1);
            table.tBodies[0].append(...rows);
        });
        document.querySelector('#sortDescending').addEventListener('click', function() {
            let table = document.querySelector('.table');
            let rows = Array.from(table.rows).slice(1);
            rows.sort((rowA, rowB) => rowA.cells[1].innerText < rowB.cells[1].innerText ? 1 : -1);
            table.tBodies[0].append(...rows);
        });
        document.querySelector('#showMahasiswa').addEventListener('click', function() {
            let table = document.querySelector('.table');
            let rows = Array.from(table.rows).slice(1);
            rows.forEach(row => {
                if (row.cells[4].innerText.trim() !== 'Mahasiswa') {
                    row.style.display = 'none';
                } else {
                    row.style.display = '';
                }
            });
        });
        document.querySelector('#showDosen').addEventListener('click', function() {
            let table = document.querySelector('.table');
            let rows = Array.from(table.rows).slice(1);
            rows.forEach(row => {
                if (row.cells[4].innerText.trim() !== 'Dosen') {
                    row.style.display = 'none';
                } else {
                    row.style.display = '';
                }
            });
        });
        document.querySelector('#showInformatika').addEventListener('click', function() {
            let table = document.querySelector('.table');
            let rows = Array.from(table.rows).slice(1);
            rows.forEach(row => {
                if (row.cells[5].innerText.trim() !== 'Informatika') {
                    row.style.display = 'none';
                } else {
                    row.style.display = '';
                }
            });
        });
        document.querySelector('#showDKV').addEventListener('click', function() {
            let table = document.querySelector('.table');
            let rows = Array.from(table.rows).slice(1);
            rows.forEach(row => {
                if (row.cells[5].innerText.trim() !== 'Desain Komunikasi Visual') {
                    row.style.display = 'none';
                } else {
                    row.style.display = '';
                }
            });
        });
        document.querySelector('#showSIB').addEventListener('click', function() {
            let table = document.querySelector('.table');
            let rows = Array.from(table.rows).slice(1);
            rows.forEach(row => {
                if (row.cells[5].innerText.trim() !== 'Sistem Informasi Bisnis') {
                    row.style.display = 'none';
                } else {
                    row.style.display = '';
                }
            });
        });
        document.querySelector('#searchBar').addEventListener('keyup', function(e) {
            let searchValue = e.target.value.toLowerCase();
            let table = document.querySelector('.table');
            let rows = Array.from(table.rows).slice(1);
            rows.forEach(row => {
                let namaUser = row.cells[1].innerText
                    .toLowerCase();
                if (namaUser.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
@endsection
