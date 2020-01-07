<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
  protected $table = 'ruangans';
  protected $fillable = ['nama_ruangan', 'fasilitas', 'jumlah_kursi', 'jumlah_meja', 'status_ruangan'];
}
