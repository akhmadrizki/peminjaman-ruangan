<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;

class RuanganController extends Controller
{
	public function get_all_ruangan() {
		return Ruangan::all();
	}
	public function create_ruangan(Request $req) {
		$ruangan = new Ruangan();
		$ruangan->nama_ruangan = $req->nama_ruangan;
		$ruangan->fasilitas = $req->fasilitas;
		$ruangan->jumlah_kursi = $req->jumlah_kursi;
		$ruangan->jumlah_meja = $req->jumlah_meja;
		$ruangan->status_ruangan = $req->status_ruangan;

		$ruangan->save();

		return $ruangan;
	}
	public function update_ruangan(Request $req, $id) {
		$ruangan = Ruangan::find($id);
		$ruangan->nama_ruangan = $req->nama_ruangan;
		$ruangan->fasilitas = $req->fasilitas;
		$ruangan->jumlah_kursi = $req->jumlah_kursi;
		$ruangan->jumlah_meja = $req->jumlah_meja;

		$ruangan->save();

		return $ruangan;
	}
	public function delete_ruangan($id) {
		$ruangan = Ruangan::find($id);

		$ruangan->delete();

		return $ruangan;
	}
}
