@extends('layouts.app')

@section('title', 'Hasil Perhitungan Gaji')

@section('content')
    <h1 class="mb-4 text-center">Hasil Perhitungan Gaji</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Total Gaji:</h5>
            <p class="card-text">Rp. {{ $total_gaji }}</p>
        </div>
    </div>
    <a href="{{ route('gaji.index') }}" class="btn btn-secondary">Kembali</a>
@endsection