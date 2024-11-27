<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;

class BarangMasukController extends Controller
{
    // Display a listing of barang masuk.
    public function index()
    {
        $barangMasuk = BarangMasuk::all(); // Fetch all records
        return view('barang_masuk.index', compact('barangMasuk'));
    }

    // Show the form for creating a new barang masuk.
    public function create()
    {
        return view('barang_masuk.create');
    }

    // Store a newly created barang masuk in the database.
    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'tgl_masuk' => 'required|date',
            'jml_masuk' => 'required|integer',
            'id_suplier' => 'required|integer'
        ]);

        BarangMasuk::create($request->all());

        return redirect()->route('barang_masuk.index')
                         ->with('success', 'Barang masuk has been added successfully.');
    }

    // Show the form for editing a specified barang masuk.
    public function edit($id)
    {
        $barangMasuk = BarangMasuk::findOrFail($id);
        return view('barang_masuk.edit', compact('barangMasuk'));
    }

    // Update a specified barang masuk in the database.
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'tgl_masuk' => 'required|date',
            'jml_masuk' => 'required|integer',
            'id_suplier' => 'required|integer'
        ]);

        $barangMasuk = BarangMasuk::findOrFail($id);
        $barangMasuk->update($request->all());

        return redirect()->route('barang_masuk.index')
                         ->with('success', 'Barang masuk has been updated successfully.');
    }

    // Remove the specified barang masuk from the database.
    public function destroy($id)
    {
        $barangMasuk = BarangMasuk::findOrFail($id);
        $barangMasuk->delete();

        return redirect()->route('barang_masuk.index')
                         ->with('success', 'Barang masuk has been deleted successfully.');
    }
}
