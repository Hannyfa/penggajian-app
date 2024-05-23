@extends('layouts.app')

@section('title', 'Detail Gaji')

@section('content')
    <h1 class="mb-4 text-center">Detail Gaji</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $gaji->karyawan->nama }}</h5>
            <p class="card-text">Gaji Pokok: {{ $gaji->gaji_pokok }}</p>
            <p class="card-text">Tunjangan: {{ $gaji->tunjangan }}</p>
            <p class="card-text">Bonus: {{ $gaji->bonus }}</p>
            <p class="card-text">BPJS: {{ $gaji->bpjs }}</p>
            <p class="card-text">Pajak: {{ $gaji->pajak }}</p>
        </div>
    </div>
    <a href="{{ route('gaji.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
