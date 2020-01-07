<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mahasiswa;

class Ruangan extends Model
{
  protected $table = 'ruangans';
  protected $fillable = ['nama_ruangan', 'fasilitas', 'jumlah_kursi', 'jumlah_meja', 'status_ruangan', 'id_mahasiswa'];

  public function mahasiswa()
  {
    return $this->belongsTo(Mahasiswa::class);
  }

}
