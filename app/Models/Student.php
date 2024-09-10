<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student'; // Assuming this is your table name

    protected $fillable = [
        'nama_pelajar',
        'ndp',
        'kursus',
        'sesi_kemasukan',
        'no_tel',
        'alamat',
        'emel',
    ];
}
