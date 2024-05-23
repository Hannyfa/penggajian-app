@extends('layouts.app')

@section('title', 'Edit Gaji')

@section('content')
    <h1 class="mb-4 text-center">Edit Gaji</h1>

    <form action="{{ route('gaji.update', $gaji->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="gaji_pokok">Gaji Pokok:</label>
            <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok" value="{{ $gaji->gaji_pokok }}">
        </div>

        <div class="form-group">
            <label for="tunjangan">Tunjangan:</label>
            <input type="text" class="form-control" id="tunjangan" name="tunjangan" value="{{ $gaji->tunjangan }}">
        </div>

        <div class="form-group">
            <label for="bonus">Bonus:</label>
            <input type="text" class="form-control" id="bonus" name="bonus" value="{{ $gaji->bonus }}">
        </div>

        <div class="form-group">
            <label for="bpjs">BPJS:</label>
            <input type="text" class="form-control" id="bpjs" name="bpjs" value="{{ $gaji->bpjs }}">
        </div>

        <div class="form-group">
            <label for="pajak">Pajak:</label>
            <input type="text" class="form-control" id="pajak" name="pajak" value="{{ $gaji->pajak }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('gaji.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
