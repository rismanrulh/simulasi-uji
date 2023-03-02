<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class masyarakat extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'nik';

    protected $fillable = [
        'nik',
        'nama',
        'username',
        'password',
        'telp',
    ];
}
