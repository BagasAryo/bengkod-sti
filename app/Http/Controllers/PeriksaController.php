<?php

namespace App\Http\Controllers;

use App\Models\Detail_periksa;
use App\Models\Obat;
use App\Models\Periksa;
use Illuminate\Http\Request;

class PeriksaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periksas = Periksa::all();
        return view('dokter.periksa', compact('periksas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $periksa = Periksa::with(['pasien', 'detailPeriksa.obat'])->findOrFail($id);
        return view('dokter.showPeriksa', compact('periksa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $periksa = Periksa::findOrFail($id);
        $obats = Obat::all();
        return view('dokter.editPeriksa', compact('periksa', 'obats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tgl_periksa' => 'required|date',
            'catatan' => 'nullable|string',
            'obat' => 'array|required',
            'obat.*' => 'exists:obats,id'
        ]);

        $periksa = Periksa::findOrFail($id);
        $periksa->update([
            'tgl_periksa' => $request->tgl_periksa,
            'catatan' => $request->catatan
        ]);

        // Hapus obat lama
        foreach ($request->obat as $id_obat) {
            Detail_periksa::create([
                'id_periksa' => $periksa->id,
                'id_obat' => $id_obat
            ]);
        }

        // Hitung total harga obat
        $totalHargaObat = Obat::whereIn('id', $request->obat)->sum(column: 'harga');

        // Tambah dengan biaya konsultasi
        $biayaKonsul = 30000;
        $totalBiaya = $totalHargaObat + $biayaKonsul;

        // Update kolom biaya periksa
        $periksa->update([
            'biaya_periksa'=>$totalBiaya
        ]);

        return redirect()->route('dokter.periksa.index')->with('success', 'Data Pemeriksaan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $periksa = Periksa::findOrFail($id);
        $periksa->delete();

        return redirect()->route('dokter.periksa.index')->with('success', 'Data berhasil dihapus');
    }
}
