@extends('layouts.Admin')

@section('content')
    <!-- Display Success Message -->
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambahkan Mahasiswa Baru</h5>
            <form action="{{ url('/TambahMhs') }}" method="POST">
                @csrf
                <input type="text" name="id_jurusan" placeholder="Jurusan ID"><br>
                <input type="text" name="nama_user" placeholder="Name" required><br>
                <input type="email" name="email_user" placeholder="Email" required><br>
                <input type="text" name="nmrtlp" placeholder="Phone Number"><br>
                <input type="text" name="role_user" placeholder="Role"><br>
                <input type="text" name="user_username" placeholder="Username" required><br>
                <input type="password" name="user_password" placeholder="Password" required><br>
                <input type="date" name="user_added_date" placeholder="Added Date"><br>
                <button type="submit">Create User</button>
            </form>
        </div>
    </div>

    <!-- Additional Button (if needed) -->
    <a href="{{ route('admin') }}">
        <button style="background-color: blue">Back to Admin</button>
    </a>
@endsection
