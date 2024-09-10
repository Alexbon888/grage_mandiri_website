<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasi';

    protected $fillable = [
        'nama',
        'no_hp',
        'alamat',
        'layanan',
        'tanggal_reservasi',
        'plat',
        'keluhan',
        'status',
        'item'
    ];
}
