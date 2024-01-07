@extends('layouts.SIM')

@section('content')
    <div class="container m-2 d-flex justify-content-center align-items-center"style="background-color: #360000;width:auto;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-light">Poin Kemahasiswaan</h1>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-secondary" onclick="printPage()">Cetak</button>
                </div>
            </div>
            <div class="row">
                @php
                    $currentType = '';
                @endphp
                @foreach ($poin_user as $poin)
                    @if ($poin->poins->tipe_acara != $currentType)
                        @php
                            $currentType = $poin->poins->tipe_acara;
                        @endphp
                        @if ($currentType == 0)
                            <h2>Minat Bakat</h2>
                        @elseif ($currentType == 1)
                            <h2>Penalaran</h2>
                        @elseif ($currentType == 2)
                            <h2>Organisasi</h3>
                            @elseif ($currentType == 3)
                                <h2>Kerohanian</h2>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"><b>Tanggal</b></th>
                                    <th scope="col"><b>Kegiatan</b></th>
                                    <th scope="col"><b>Poin</b></th>
                                </tr>
                            </thead>
                            <tbody>
                    @endif
                    <tr>
                        <td>{{ $poin->poins->poin_added_date ?? 'N/A' }}</td>
                        <td> {{ $poin->poins->nama_acara ?? 'N/A' }}</td>
                        <td>{{ $poin->poins->jml_poin ?? 'N/A' }}</td>
                    </tr>
                    @if ($loop->last || $poin_user[$loop->index + 1]->poins->tipe_acara != $currentType)
                        </tbody>
                        </table>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <script>
        function printPage() {
            var printContents = '';
            var tables = document.getElementsByClassName('table');
            for (var i = 0; i < tables.length; i++) {
                printContents += tables[i].outerHTML;
            }

            var printWindow = window.open('', '_blank');
            printWindow.document.write('<html><head><title>Print</title></head><body>');
            printWindow.document.write(printContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }
    </script>
@endsection
