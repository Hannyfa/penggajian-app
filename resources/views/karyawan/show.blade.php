@extends('layouts.app')

@section('title', 'Detail Karyawan')

@section('content')
    <h1 class="mb-4 text-center">Detail Karyawan</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $karyawan->nama }}</h5>
            <p class="card-text">Alamat: {{ $karyawan->alamat }}</p>
            <p class="card-text">NIP: {{ $karyawan->nip }}</p>
            <p class="card-text">Departemen: {{ $karyawan->departemen }}</p>
            <p class="card-text">Jabatan: {{ $karyawan->jabatan }}</p>
        </div>
    </div>
    <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
