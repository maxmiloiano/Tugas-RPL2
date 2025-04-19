@extends('layout')

@section('content')
    <h2>Edit Mahasiswa</h2>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}" required><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" value="{{ $mahasiswa->nim }}" required><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}" required><br><br>

        <button type="submit">Update</button>
    </form>
@endsection
