<?php

namespace App\Http\Controllers;

use App\Models\PinjamBarang;
use Illuminate\Http\Request;

class PinjamBarangController extends Controller
{
    // Display a listing of the borrowed items.
    public function index()
    {
        $pinjamBarangs = PinjamBarang::all(); // Fetch all records
        return view('pinjam_barang.index', compact('pinjamBarangs'));
    }

    // Show the form for creating a new borrowed item.
    public function create()
    {
        return view('pinjam_barang.create');
    }

    // Store a newly created borrowed item in the database.
    public function store(Request $request)
    {
        $request->validate([
            'id_pinjam'    => 'required|unique:pinjam_barang,id_pinjam|max:255',
            'nama_barang'  => 'required|string|max:255',
            'jml_barang'   => 'required|integer|min:1',
            'tgl_pinjam'   => 'required|date',
            'peminjam'     => 'required|string|max:255',
            'id_barang'    => 'required|integer',
            'tgl_kembali'  => 'required|date',
            'kondisi'      => 'required|string|max:255'
        ]);

        // Create the record in the database
        PinjamBarang::create([
            'id_pinjam'    => $request->input('id_pinjam'),
            'nama_barang'  => $request->input('nama_barang'),
            'jml_barang'   => $request->input('jml_barang'),
            'tgl_pinjam'   => $request->input('tgl_pinjam'),
            'peminjam'     => $request->input('peminjam'),
            'id_barang'    => $request->input('id_barang'),
            'tgl_kembali'  => $request->input('tgl_kembali'),
            'kondisi'      => $request->input('kondisi'),
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);

        // Redirect back with a success message
        return redirect()->route('pinjam_barang.index')
                         ->with('success', 'Barang berhasil dipinjam!');
    }

    // Show the form for editing a specific borrowed item.
    public function edit($id)
    {
        $pinjamBarang = PinjamBarang::findOrFail($id);
        return view('pinjam_barang.edit', compact('pinjamBarang'));
    }

    // Update the specific borrowed item in the database.
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pinjam'    => 'required|max:255',
            'nama_barang'  => 'required|string|max:255',
            'jml_barang'   => 'required|integer|min:1',
            'tgl_pinjam'   => 'required|date',
            'peminjam'     => 'required|string|max:255',
            'id_barang'    => 'required|integer',
            'tgl_kembali'  => 'required|date',
            'kondisi'      => 'required|string|max:255'
        ]);

        // Find the record and update it
        $pinjamBarang = PinjamBarang::findOrFail($id);
        $pinjamBarang->update([
            'id_pinjam'    => $request->input('id_pinjam'),
            'nama_barang'  => $request->input('nama_barang'),
            'jml_barang'   => $request->input('jml_barang'),
            'tgl_pinjam'   => $request->input('tgl_pinjam'),
            'peminjam'     => $request->input('peminjam'),
            'id_barang'    => $request->input('id_barang'),
            'tgl_kembali'  => $request->input('tgl_kembali'),
            'kondisi'      => $request->input('kondisi'),
            'updated_at'   => now(),
        ]);

        // Redirect back with a success message
        return redirect()->route('pinjam_barang.index')
                         ->with('success', 'Barang berhasil diperbarui!');
    }

    // Remove the specified borrowed item from the database.
    public function destroy($id)
    {
        $pinjamBarang = PinjamBarang::findOrFail($id);
        $pinjamBarang->delete();

        // Redirect back with a success message
        return redirect()->route('pinjam_barang.index')
                         ->with('success', 'Barang berhasil dikembalikan!');
    }
}
