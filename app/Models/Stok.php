<?php
// app/Models/Stok.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
  
    protected $table = 'stoks';
    protected $fillable = ['id_barang', 'nama_barang', 'jml_masuk', 'jml_keluar', 'total_barang'];}