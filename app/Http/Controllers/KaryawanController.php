<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function hitungGaji($karyawan)
    {
        $gaji_pokok = optional($karyawan->gaji)->gaji_pokok ?? 0;
        $tunjangan = optional($karyawan->gaji)->tunjangan ?? 0;
        $bonus = optional($karyawan->gaji)->bonus ?? 0;
        $bpjs = optional($karyawan->gaji)->bpjs ?? 0;
        $pajak = optional($karyawan->gaji)->pajak ?? 0;

        $total_gaji = $gaji_pokok + $tunjangan + $bonus - $bpjs - $pajak;

        return $total_gaji;
    }

    public function generatePDF($id_karyawan)
    {
        $karyawan = Karyawan::findOrFail($id_karyawan);
        
        $total_gaji = $this->hitungGaji($karyawan);

        $dompdf = new Dompdf();

        $html = view('karyawan.laporan_gaji_pdf', compact('karyawan', 'total_gaji'));

        $dompdf->loadHtml($html);

        $dompdf->render();

        return $dompdf->stream('laporan_gaji_'.$karyawan->nama.'.pdf');
    }

    public function index()
    {
        $karyawan = Karyawan::all();
        return view('karyawan.index', compact('karyawan'));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        Karyawan::create($request->all());
        return redirect()->route('karyawan.index');
    }

    public function show(Karyawan $karyawan)
    {
        return view('karyawan.show', compact('karyawan'));
    }

    public function edit(Karyawan $karyawan)
    {
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, Karyawan $karyawan)
    {
        $karyawan->update($request->all());
        return redirect()->route('karyawan.index');
    }

    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        return redirect()->route('karyawan.index');
    }
}
