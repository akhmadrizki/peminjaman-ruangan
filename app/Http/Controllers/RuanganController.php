<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;

class RuanganController extends Controller
{
	public function get_all_ruangan() {
		return Ruangan::all();
	}
}
