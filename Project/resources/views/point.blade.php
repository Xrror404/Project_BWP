@extends('layouts.SIM')

@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Your existing content -->

            <div class="container">
                <h2 class="text-light">Point Seluruh</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="background-color: black; color: white;">Tanggal</th>
                            <th scope="col" style="background-color: black; color: white;">Kegiatan</th>
                            <th scope="col" style="background-color: black; color: white;">Poin</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($poinUser as $poin)
                            <tr>
                                <td style="background-color: black; color: white;">
                                    {{ $poin->poin->poin_added_date ?? 'N/A' }}</td>
                                <td style="background-color: black; color: white;">{{ $poin->poin->nama_acara ?? 'N/A' }}
                                </td>
                                <td style="background-color: black; color: white;">{{ $poin->poin->jml_poin ?? 'N/A' }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">No data available</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
                <!-- Tambahkan ini sebelum loop untuk debugging -->
                {{-- dd($poinUser) --}}
                {{-- @foreach ($poinUser as $penerimaPoin)
                    @if ($penerimaPoin->poin)
                        <p>Tanggal: {{ $penerimaPoin->poin->poin_added_date }}</p>
                        <p>Kegiatan: {{ $penerimaPoin->poin->nama_acara }}</p>
                        <p>Poin: {{ $penerimaPoin->poin->jml_poin }}</p>
                        <hr>
                    @endif
                @endforeach --}}

            </div>
        </div>
    </div>
    <br>
    <script>
        function printPage() {
            window.print();
        }
    </script>
@endsection
