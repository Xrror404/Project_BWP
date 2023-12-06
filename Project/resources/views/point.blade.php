@extends('layouts.SIM')

@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Your existing content -->

            <div class="container">
                <h2 class="text-light">Point {{ $user->user_username }}</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Kegiatan</th>
                            <th scope="col">Poin</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @dd($poinAll->Orang) --}}
                        {{-- Ini percobaan yang masih belum sempurna V --}}
                        @foreach ($poinAll as $poin)
                            <tr>
                                <td>{{ $poin->poin_added_date ?? 'N/A' }}</td>
                                <td>{{ $poin->nama_acara ?? 'N/A' }}</td>
                                <td>{{ $poin->jml_poin ?? 'N/A' }}</td>
                            </tr>
                        @endforeach
                        {{-- ini Yang Seharusnya V --}}
                        {{-- @foreach ($poinAll->Orang as $poin)
                            <tr>
                                <td>{{ $poin->poin_added_date ?? 'N/A' }}</td>
                                <td>{{ $poin->nama_acara ?? 'N/A' }}</td>
                                <td>{{ $poin->jml_poin ?? 'N/A' }}</td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>

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
