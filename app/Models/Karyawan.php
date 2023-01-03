<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'no_telp',
        'email',
        'departemen',
        'jabatan',
        'gaji',
    ];
}
