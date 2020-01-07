<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;

class PinjamController extends Controller
{
    public function create_pinjaman(Request $req)
    {
        $data =[
            'tanggal_pinjam' => $req->tanggal_pinjam,
            'tanggal_kembali' => $req->tanggal_kembali,
            'status_ruangan' => $req->status_ruangan,
            'id_ruangan' => $req->id_ruangan,
            'id_mahasiswa' => $req->id_mahasiswa
        ];

        $ruangan = Ruangan::find($data['id_ruangan']);
        
        $ruangan->update($data);

        return $ruangan;
    }

    public function get_pinjaman()
    {
        return Ruangan::where('status_ruangan', '=', 'dipinjam')->get();
    }
}
