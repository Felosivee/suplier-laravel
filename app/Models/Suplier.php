<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Suplier extends Model
{
    use HasFactory;
    protected $table = 'supplier';
    protected $fillable = [
        'id_supplier',
        'nama_supplier',
        'alamat_supplier',
        'telepon_supplier'];

}   
