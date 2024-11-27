<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\PinjamBarangController;
Route::get('/', function () {
   return view('home');
});
// Rute untuk menampilkan semua data suplier
Route::get('/suplier',   [SuplierController::class, 'index'])->name('suplier.index');
// Rute untuk menampilkan form membuat suplier baru
Route::get('/suplier/create', [SuplierController::class, 'create'])->name('suplier.create');
// Rute untuk menambahkan data suplier baru
Route::post('/suplier', [SuplierController::class, 'store'])->name('suplier.store');
// Route untuk menampilkan form edit
Route::get('/suplier/{suplier}', [SuplierController::class, 'edit'])->name('suplier.edit');
// Route untuk mengupdate data supplier
Route::put('/suplier/{suplier}', [SuplierController::class, 'update'])->name('suplier.update');
// Route untuk menghapus data supplier
Route::delete('/suplier/{suplier}', [SuplierController::class, 'destroy'])->name('suplier.destroy');


// Rute untuk menampilkan semua data user
Route::get('/user', [UserController::class, 'index'])->name('user.index');

// Rute untuk menampilkan form membuat user baru
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// Rute untuk menambahkan data user baru
Route::post('/user', [UserController::class, 'store'])->name('user.store');

// Route untuk menampilkan form edit user
Route::get('/user/{user}', [UserController::class, 'edit'])->name('user.edit');

// Route untuk mengupdate data user
Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');

// Route untuk menghapus data user
Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');


// Rute untuk menampilkan semua data stok
Route::get('/stok', [StokController::class, 'index'])->name('stok.index');

// Rute untuk menampilkan form membuat stok baru
Route::get('/stok/create', [StokController::class, 'create'])->name('stok.create');

// Rute untuk menambahkan data stok baru
Route::post('/stok', [StokController::class, 'store'])->name('stok.store');

// Route untuk menampilkan form edit stok
Route::get('/stok/{stok}edit', [StokController::class, 'edit'])->name('stok.edit');

// Route untuk mengupdate data stok
Route::put('/stok/{stok}', [StokController::class, 'update'])->name('stok.update');

// Route untuk menghapus data stok
Route::delete('/stok/{stok}', [StokController::class, 'destroy'])->name('stok.destroy');


// Route to display all barang masuk data
Route::get('/barang-masuk', [BarangMasukController::class, 'index'])->name('barang_masuk.index');

// Route to show the form for creating a new barang masuk
Route::get('/barang-masuk/create', [BarangMasukController::class, 'create'])->name('barang_masuk.create');

// Route to store a newly created barang masuk
Route::post('/barang-masuk', [BarangMasukController::class, 'store'])->name('barang_masuk.store');

// Route to show the form for editing an existing barang masuk
Route::get('/barang-masuk/{barangMasuk}/edit', [BarangMasukController::class, 'edit'])->name('barang_masuk.edit');

// Route to update an existing barang masuk
Route::put('/barang-masuk/{barangMasuk}', [BarangMasukController::class, 'update'])->name('barang_masuk.update');

// Route to delete a barang masuk
Route::delete('/barang-masuk/{barangMasuk}', [BarangMasukController::class, 'destroy'])->name('barang_masuk.destroy');


// Route to display all barang keluar data
Route::get('/barang-keluar', [BarangKeluarController::class, 'index'])->name('barang_keluar.index');

// Route to show the form for creating a new barang keluar
Route::get('/barang-keluar/create', [BarangKeluarController::class, 'create'])->name('barang_keluar.create');

// Route to store a newly created barang keluar
Route::post('/barang-keluar', [BarangKeluarController::class, 'store'])->name('barang_keluar.store');

// Route to show the form for editing an existing barang keluar
Route::get('/barang-keluar/{barangKeluar}/edit', [BarangKeluarController::class, 'edit'])->name('barang_keluar.edit');

// Route to update an existing barang keluar
Route::put('/barang-keluar/{barangKeluar}', [BarangKeluarController::class, 'update'])->name('barang_keluar.update');

// Route to delete a barang keluar
Route::delete('/barang-keluar/{barangKeluar}', [BarangKeluarController::class, 'destroy'])->name('barang_keluar.destroy');

// Route to display all pinjam barang data
Route::get('/pinjam-barang', [PinjamBarangController::class, 'index'])->name('pinjam_barang.index');

// Route to show the form for creating a new pinjam barang
Route::get('/pinjam-barang/create', [PinjamBarangController::class, 'create'])->name('pinjam_barang.create');

// Route to store a newly created pinjam barang
Route::post('/pinjam-barang', [PinjamBarangController::class, 'store'])->name('pinjam_barang.store');

// Route to show the form for editing an existing pinjam barang
Route::get('/pinjam-barang/{pinjamBarang}/edit', [PinjamBarangController::class, 'edit'])->name('pinjam_barang.edit');

// Route to update an existing pinjam barang
Route::put('/pinjam-barang/{pinjamBarang}', [PinjamBarangController::class, 'update'])->name('pinjam_barang.update');

// Route to delete a pinjam barang
Route::delete('/pinjam-barang/{pinjamBarang}', [PinjamBarangController::class, 'destroy'])->name('pinjam_barang.destroy');


