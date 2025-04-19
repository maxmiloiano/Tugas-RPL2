@extends('layout')

@section('content')
    <h2>Tambah Mahasiswa</h2>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf

        <label>Nama:</label><br>
        <input type="text" name="nama" required><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" required><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" required><br><br>

        <button type="submit">Simpan</button>
    </form>
@endsection
