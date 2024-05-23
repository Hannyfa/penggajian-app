@extends('layouts.app')

@section('title', 'Data Karyawan')

@section('content')
    <h1 class="mb-4 text-center">Data Karyawan</h1>

    <a href="{{ route('karyawan.create') }}" class="btn btn-primary mb-3">Tambah Karyawan</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">NIP</th>
                <th scope="col">Departemen</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($karyawan as $k)
                <tr>
                    <td>{{ $k->nama }}</td>
                    <td>{{ $k->alamat }}</td>
                    <td>{{ $k->nip }}</td>
                    <td>{{ $k->departemen }}</td>
                    <td>{{ $k->jabatan }}</td>
                    <td>
                        <a href="{{ route('karyawan.show', $k->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('karyawan.edit', $k->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('karyawan.laporan', $k->id) }}" class="btn btn-success btn-sm">Laporan gaji</a>
                        <form action="{{ route('karyawan.destroy', $k->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus karyawan ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum ada karyawan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
