<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pengaduan';

    protected $fillable = [
        'tgl_pengaduan',
        'nik',
        'isi_laporan',
        'foto',
        'status',
    ];

    //tgl_pengaduan = date

    protected $dates = ['tgl_pengaduan'];

    // eloquent relationship
    public function user()
    {
        return $this->hasOne(masyarakat::class, 'nik', 'nik');
    }
}
