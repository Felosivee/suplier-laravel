<?php

namespace App\Http\Controllers;

use App\Models\Stok; // Changed 'User' to 'Stok'
use Illuminate\Http\Request;

class StokController extends Controller { // Changed 'UserController' to 'StokController'
   // Menampilkan semua data stok
   public function index()
   {
       $stoks = Stok::all(); // Changed 'users' to 'stoks'
       return view('stok.index', compact('stoks')); // Changed 'user.index' to 'stok.index'
   }

   // Menampilkan form untuk membuat stok baru
   public function create()
   {
       return view('stok.create'); 
   }

   // Menyimpan data stok ke database
   public function store(Request $request)
   {
       $validated = $request->validate([
           'id_barang' => 'required|integer',
           'nama_barang' => 'required|string|max:255',
           'jml_masuk' => 'nullable|string',
           'jml_keluar' => 'nullable|string|max:15',
           'total_barang' => 'nullable|string|max:15',
       ]);

       Stok::create($validated); // Changed 'User' to 'Stok'

       return redirect()->route('stok.index')->with('success', 'Stok berhasil ditambahkan.'); // Changed 'user' to 'stok'
   }

   // Menghapus data stok dari database
   public function destroy(Stok $stok) // Changed 'User' to 'Stok'
   {
       $stok->delete(); // Changed 'user' to 'stok'

       return redirect()->route('stok.index')->with('success', 'Data Stok berhasil dihapus.'); // Changed 'user' to 'stok'
   }

   // Show the edit form for a specific stok
   public function edit($id)
   {
       $stok = Stok::find($id); // Changed 'user' to 'stok'

       // Check if the stok exists
       if (!$stok) {
           return redirect()->route('stok.index')->with('error', 'Stok not found.'); // Changed 'user' to 'stok'
       }
       return view('stok.edit', compact('stok')); // Changed 'user.edit' to 'stok.edit'
   }

   // Update stok data
   public function update(Stok $stok, Request $request) // Changed 'User' to 'Stok'
   {
       // Validasi data request jika diperlukan
       $validatedData = $request->validate([
           'nama_barang' => 'required|string|max:255',
           'jml_masuk' => 'nullable|string',
           'jml_keluar' => 'nullable|string|max:15',
           'total_barang' => 'nullable|string|max:15',
       ]);

       // Update stok data
       $stok->update($validatedData); // Changed 'user' to 'stok'

       return redirect()->route('stok.index')->with('success', 'Stok data successfully updated.'); // Changed 'user' to 'stok'
   }
}
