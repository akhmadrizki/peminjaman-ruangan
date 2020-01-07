<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ruangan;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $fillable = [
        'nama',
        'jk',
        'angkatan',
        'jurusan'
    ];

    public function ruangan()
    {
        return $this->hasOne(Ruangan::class);
    }

}
