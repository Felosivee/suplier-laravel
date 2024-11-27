<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    // Menampilkan data barang keluar
    public function index()
    {
        $barangKeluar = BarangKeluar::all(); // Mengambil semua data barang keluar
        return view('barang_keluar.index', compact('barangKeluar'));
    }

    // Menampilkan form untuk membuat barang keluar baru
    public function create()
    {
        return view('barang_keluar.create');
    }

    // Menyimpan data barang keluar ke dalam database
    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'tgl_keluar' => 'required|date',
            'jml_keluar' => 'required|integer',
            'lokasi' => 'required|string|max:255',
            'penerima' => 'required|string|max:255',
        ]);

        BarangKeluar::create($request->all());

        return redirect()->route('barang_keluar.index')
                         ->with('success', 'Data barang keluar berhasil disimpan.');
    }

    // Menampilkan form untuk mengedit data barang keluar
    public function edit($id)
    {
        $barangKeluar = BarangKeluar::findOrFail($id);
        return view('barang_keluar.edit', compact('barangKeluar'));
    }

    // Memperbarui data barang keluar
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'tgl_keluar' => 'required|date',
            'jml_keluar' => 'required|integer',
            'lokasi' => 'required|string|max:255',
            'penerima' => 'required|string|max:255',
        ]);

        $barangKeluar = BarangKeluar::findOrFail($id);
        $barangKeluar->update($request->all());

        return redirect()->route('barang_keluar.index')
                         ->with('success', 'Data barang keluar berhasil diperbarui.');
    }

    // Menghapus data barang keluar
    public function destroy($id)
    {
        $barangKeluar = BarangKeluar::findOrFail($id);
        $barangKeluar->delete();

        return redirect()->route('barang_keluar.index')
                         ->with('success', 'Data barang keluar berhasil dihapus.');
    }
}
