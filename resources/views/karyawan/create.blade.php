@extends('layouts.app')

@section('title', 'Tambah Karyawan')

@section('content')
    <h1 class="mb-4 text-center">Tambah Karyawan</h1>

    <form action="{{ route('karyawan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>

        <div class="form-group">
            <label for="nip">NIP:</label>
            <input type="text" class="form-control" id="nip" name="nip">
        </div>

        <div class="form-group">
            <label for="departemen">Departemen:</label>
            <input type="text" class="form-control" id="departemen" name="departemen">
        </div>

        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan">
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
