<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class GajiController extends Controller
{

    public function input()
    {
        return view('gaji.input');
    }

    public function hitungGaji(Request $request)
    {
        $gaji_pokok = $request->input('gaji_pokok');
        $tunjangan = $request->input('tunjangan');
        $bonus = $request->input('bonus');
        $bpjs = $request->input('bpjs');
        $pajak = $request->input('pajak');

        $total_gaji = $gaji_pokok + $tunjangan + $bonus - $bpjs - $pajak;

        return view('gaji.hitung', compact('total_gaji'));
    }
    
    public function index()
    {
        $gaji = Gaji::all();
        return view('gaji.index', compact('gaji'));
    }

    public function create()
    {
        $karyawan = Karyawan::all();
        return view('gaji.create', compact('karyawan'));
    }

    public function store(Request $request)
    {
        Gaji::create($request->all());
        return redirect()->route('gaji.index');
    }

    public function show(Gaji $gaji)
    {
        return view('gaji.show', compact('gaji'));
    }

    public function edit(Gaji $gaji)
    {
        return view('gaji.edit', compact('gaji'));
    }

    public function update(Request $request, Gaji $gaji)
    {
        $gaji->update($request->all());
        return redirect()->route('gaji.index');
    }

    public function destroy(Gaji $gaji)
    {
        $gaji->delete();
        return redirect()->route('gaji.index');
    }
}
