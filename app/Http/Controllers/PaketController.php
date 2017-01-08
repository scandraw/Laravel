<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Paket;
use Auth;
use session;
class PaketController extends Controller
{
    public function create(){
		return view('paket.create');
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
	public function index()
	{
		$paket = Paket::all();

		return view('paket.index',compact('paket'));
	}

	
}
