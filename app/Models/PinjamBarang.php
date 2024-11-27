<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class PinjamBarang extends Model


{
    use HasFactory;

    // Define the table name (optional if the table is named using plural of model)
    protected $table = 'pinjam_barang';

    // Define which attributes are mass assignable
    protected $fillable = [
        'id_pinjam',
        'id_barang',
        'nama_barang',
        'peminjam',
        'jml_barang',
        'tgl_pinjam',
        'tgl_kembali',
        'kondisi',
    ];
}
