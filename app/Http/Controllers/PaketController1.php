<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Paket;

class PostController extends Controller
{
	public function create(){
		return view('input-paket');
	}
	public function store(Request $request){
		$nama = $request->nama;
		$isi_paket = $request->isi_paket;
		$paket = new paket;
		$paket->nama = $nama;
		$paket->isi_paket = $isi_paket;
		$paket->save();
		Return 'berhasil';
	}
}
