@extends('layouts.app')

@section('title', 'Tambah Gaji')

@section('content')
    <h1 class="mb-4 text-center">Tambah Gaji</h1>

    <form action="{{ route('gaji.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_karyawan">Karyawan:</label>
            <select name="id_karyawan" id="id_karyawan" class="form-control">
                <option value="">Pilih Karyawan</option>
                @foreach($karyawan as $k)
                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="gaji_pokok">Gaji Pokok:</label>
            <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok">
        </div>

        <div class="form-group">
            <label for="tunjangan">Tunjangan:</label>
            <input type="text" class="form-control" id="tunjangan" name="tunjangan">
        </div>

        <div class="form-group">
            <label for="bonus">Bonus:</label>
            <input type="text" class="form-control" id="bonus" name="bonus">
        </div>

        <div class="form-group">
            <label for="bpjs">BPJS:</label>
            <input type="text" class="form-control" id="bpjs" name="bpjs">
        </div>

        <div class="form-group">
            <label for="pajak">Pajak:</label>
            <input type="text" class="form-control" id="pajak" name="pajak">
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="{{ route('gaji.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
