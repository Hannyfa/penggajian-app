@extends('layouts.app')

@section('title', 'Data Gaji')

@section('content')
    <h1 class="mb-4 text-center">Data Gaji</h1>

    <a href="{{ route('gaji.create') }}" class="btn btn-primary mb-3">Tambah Gaji</a>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Karyawan</th>
                <th scope="col">Gaji Pokok</th>
                <th scope="col">Tunjangan</th>
                <th scope="col">Bonus</th>
                <th scope="col">BPJS</th>
                <th scope="col">Pajak</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gaji as $key => $gaji)
                <tr>
                    <td>{{ $gaji->karyawan->nama }}</td>
                    <td>{{ $gaji->gaji_pokok }}</td>
                    <td>{{ $gaji->tunjangan }}</td>
                    <td>{{ $gaji->bonus }}</td>
                    <td>{{ $gaji->bpjs }}</td>
                    <td>{{ $gaji->pajak }}</td>
                    <td>
                        <a href="{{ route('gaji.show', $gaji->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('gaji.edit', $gaji->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('gaji.input') }}" class="btn btn-primary btn-sm">Hitung</a>
                        <form action="{{ route('gaji.destroy', $gaji->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus gaji ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
