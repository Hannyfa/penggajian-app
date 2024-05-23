@extends('layouts.app')

@section('title', 'Edit Karyawan')

@section('content')
    <h1 class="mb-4 text-center">Edit Karyawan</h1>

    <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $karyawan->nama }}">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $karyawan->alamat }}">
        </div>

        <div class="form-group">
            <label for="nip">NIP:</label>
            <input type="text" class="form-control" id="nip" name="nip" value="{{ $karyawan->nip }}">
        </div>

        <div class="form-group">
            <label for="departemen">Departemen:</label>
            <input type="text" class="form-control" id="departemen" name="departemen" value="{{ $karyawan->departemen }}">
        </div>

        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $karyawan->jabatan }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
