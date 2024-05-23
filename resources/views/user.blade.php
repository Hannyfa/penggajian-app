@extends('layouts.app')

@section('title', 'Halaman User')

@section('content')
    <div class="text-center">
        <h1>Selamat Datang
            <i class="fa fa-user-circle"></i>
        </h1>
        <a href="/logout" class="btn btn-flat bg-red text-white rounded-pill">Logout</a>
    </div>
    <br>
@endsection