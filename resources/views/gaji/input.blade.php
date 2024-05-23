@extends('layouts.app')

@section('title', 'Hitung Gaji')

@section('content')
    <h1 class="mb-4 text-center">Hitung Gaji</h1>

    <form action="{{ route('gaji.hitung') }}" method="POST">
        @csrf
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
        <br>
        <button type="submit" class="btn btn-primary">Hitung Gaji</button>
        <a href="{{ route('gaji.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
