<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;

    // Specify the table if it doesn't follow Laravel's default naming convention
    protected $table = 'barang_masuk';

    // Define the primary key, if it's not 'id'
    protected $primaryKey = 'id';

    // Allow mass-assignment for these columns
    protected $fillable = [
        'id_barang',
        'nama_barang',
        'tgl_masuk',
        'jml_masuk',
        'id_suplier',
    ];

    // If you want to cast certain fields to specific data types
    protected $casts = [
        'tgl_masuk' => 'date', // Ensure the date is properly formatted
    ];
}
