@extends('layouts.Admin')

@section('content')
    <div class="container rounded"style="background-color: #360000;">
        <div class="row">
            <div class="col-md-1 m-2">
                <div class="container m-2">
                    <h1 class="text-light">Filter:</h1>
                </div>
            </div>
            <div class="col-md-2 m-2">
                <div class="container m-2"style="width:max-content;">
                    <button class="btn btn-primary" onclick="location.reload();">
                        <h3>All Matkul</h3>
                    </button>
                </div>
            </div>
            <div class="col-md-3 m-2">
                <div class="container m-2">
                    <div class="dropdown">
                        <span class= "btn btn-danger"style="cursor: pointer;" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <h3>Nama Matkul</h3>
                        </span>
                        <div class="dropdown-menu bg-light dropdown-menu-right" aria-labelledby="dropdownMenuButton"
                            id="DropDownButton">
                            <button class="dropdown-item" type="button" id="sortAscending">Ascending</button>
                            <button class="dropdown-item" type="button" id="sortDescending">Descending</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 m-2">
                <div class="container m-2">
                    <div class="dropdown">
                        <span class= "btn btn-danger"style="cursor: pointer;" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <h3>Jurusan</h3>
                        </span>
                        <div class="dropdown-menu bg-light dropdown-menu-right" aria-labelledby="dropdownMenuButton"
                            id="DropDownButton">
                            <button class="dropdown-item" type="button" id="showInformatika">Informatika</button>
                            <button class="dropdown-item" type="button" id="showDKV">Desain Komunikasi Visual</button>
                            <button class="dropdown-item" type="button" id="showSIB">Sistem Informasi Bisnis</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 m-2">
                <div class="container m-4">
                    <input type="text" id="searchBar" placeholder="Cari nama Matkul...">
                </div>
            </div>
        </div>

        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID Mata Kuliah</th>
                        <th>Nama Mata Kuliah</th>
                        <th>Jurusan</th>
                        <th>Jumlah SKS</th>
                        <th>Semester</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($matkul as $mt)
                        <tr>
                            <td>{{ $mt->id_matkul }}</td>
                            <td>{{ $mt->nama_matkul }}</td>
                            <td>
                                @if ($mt->id_jurusan == 11)
                                    <p>Informatika</p>
                                @elseif($mt->id_jurusan == 17)
                                    <p>Desain Komunikasi Visual</p>
                                @elseif($mt->id_jurusan == 18)
                                    <p>Sistem Informasi Bisnis</p>
                                @endif
                            </td>
                            <td>{{ $mt->sks_matkul }}</td>
                            <td>{{ $mt->sms_matkul }}</td>
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
        document.querySelector('#showInformatika').addEventListener('click', function() {
            let table = document.querySelector('.table');
            let rows = Array.from(table.rows).slice(1);
            rows.forEach(row => {
                if (row.cells[2].innerText.trim() !== 'Informatika') {
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
                if (row.cells[2].innerText.trim() !== 'Desain Komunikasi Visual') {
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
                if (row.cells[2].innerText.trim() !== 'Sistem Informasi Bisnis') {
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
