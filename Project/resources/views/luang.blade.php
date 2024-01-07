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
    {{-- <div class="container"> --}}
    <!-- Display student data if available -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">laporan keuangan mahasiswa</h5>
                </div>
                <div>
                    <h6 class="card-title">Rincian Tagihan Semester GENAP 2023/2024 - AKTIF REGULER</h6>
                    <h6 class="card-title">-</h6>
                </div>
                <table style="color: white; width: 100%;">
                    <thead>
                        <tr>
                            <th>Tanggal Jatuh Tempo</th>
                            <th>SKS</th>
                            <th>SPP</th>
                            <th>Cicilan</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Add your billing details here -->
                        <tr>
                            <td>01-01-2024</td>
                            <td>15</td>
                            <td>Rp. 200,000</td>
                            <td>Rp. 50,000</td>
                            <td>Rp. 250,000</td>
                        </tr>
                        <tr>
                            <td>02-01-2024</td>
                            <td>18</td>
                            <td>Rp. 250,000</td>
                            <td>Rp. 60,000</td>
                            <td>Rp. 310,000</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>

                <div>
                    <h6 class="card-title">Rincian Pembayaran Semester GENAP 2023/2024 (Januari 2024 - Juni 2024)</h6>
                    <h6 class="card-title"></h6>
                </div>
                <table style="color: white; width: 100%;">
                    <thead>
                        <tr>
                            <th>Tanggal Bayar</th>
                            <th>Keterangan</th>
                            <th>Jenis Bayar</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Add your payment details here -->
                        <tr>
                            <td>01-01-2024</td>
                            <td>Keterangan 1</td>
                            <td>Jenis Bayar 1</td>
                            <td>Rp. 100,000</td>
                        </tr>
                        <tr>
                            <td>02-01-2024</td>
                            <td>Keterangan 2</td>
                            <td>Jenis Bayar 2</td>
                            <td>Rp. 150,000</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">
                                <h2>Total :</h2>
                            </td>
                            <td>
                                <h3>Rp. 250,000</h3>
                            </td>
                        </tr>
                    </tfoot>
                </table>

                <table style="color: white;">
                    <tr>
                        <th>RANGKUMAN</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>Kekurangan pembayaran semester lalu</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Total tagihan semester sekarang</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Total pembayaran semester sekarang</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="2">________________________________________+</th>
                    </tr>
                    <tr>
                        <th>Total Kekurangan</th>
                        <td></td>
                    </tr>
                </table>



            </div>
        </div>
    </div>
@endsection
