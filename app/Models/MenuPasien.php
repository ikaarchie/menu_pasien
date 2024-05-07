<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuPasien extends Model
{
    use HasFactory;
    protected $fillable = [
        'ruangan',
        'kelas',
        'jaminan',
        'mrn',
        'nama',
        'tgl_lahir',
        'dpjp',
        'diagnosa',
        'makan_pagi',
        'snack_pagi',
        'makan_siang',
        'snack_siang',
        'makan_sore',
        'keterangan'
    ];
}
