@extends('layouts.SIM')

@section('content')
    {{-- <div class="container"> --}}
    <!-- Display student data if available -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <h1 class="text-light"> Point Kemahasiswaan </h1>
                </div>
                <div class="col-md-4 text-right p-0">
                    <div class="row">
                        <div class="col-md-4">
                            <Button class="btn btn-light"style="width:auto;"onclick="printPage()">
                                <img src="../Assets/PrintLogo.png" alt="" srcset=""style="width:5vw;height: auto;padding-bottom:2vh;">
                                <h5>Cetak</h5>
                            </Button>
                        </div>
                        <div class="col-md-8">
                            <div class="container bg-light">
                                <h4>Akumulasi Point</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card text-left">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 p-0">
                    <div class="container"style="padding:2vh;">
                        <h2 class="text-light">Point Seluruh</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Kegiatan</th>
                            <th scope="col">Poin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    {{-- minat bakat nya yang card nya  --}}
    {{-- penalaran card nya --}}
    {{-- <br>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Penalaran</h5>
                    <p class="card-text">Tanggal:</p>
                    <p class="card-text">Kegiatan:</p>
                </div>

                <div class="col-md-6 text-right">
                    <p class="card-text">Point</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Organisasi</h5>
                    <p class="card-text">Tanggal:</p>
                    <p class="card-text">Kegiatan:</p>
                </div>

                <div class="col-md-6 text-right">
                    <p class="card-text">Point</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="card"> 
<div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Kerohanian</h5>
                    <p class="card-text">Tanggal:</p>
                    <p class="card-text">Kegiatan:</p>
                </div>

                <div class="col-md-6 text-right">
                    <p class="card-text">Point</p>
                </div>
            </div>
        </div>
    </div> --}}
    <script>
        function printPage() {
            window.print();
        }
    </script>
@endsection
