<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rumah_sakit extends Model
{
    protected $table = 'rumah_sakits';

    protected $fillable = [
        'nama_rumah_sakit',
        'alamat_lengkap',
        'no_telepon',
        'tipe_rumah_sakit',
        'latitude',
        'longitude',
    ];
}
