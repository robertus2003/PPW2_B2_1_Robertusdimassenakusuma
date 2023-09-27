<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    // Nama tabel yang terkait dengan model
    protected $table = 'barang';

    // Kolom-kolom yang dapat diisi (fillable) secara massal
    protected $fillable = [
        'nama', 'harga', 'stok',
    ];

    // Kolom yang sebaiknya disembunyikan dalam hasil JSON
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}


