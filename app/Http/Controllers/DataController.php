<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Data;
use Auth;
use Session;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::paginate(6);
        

        return view ('data.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama_paket = $request->nama_paket;
        $harga_paket = $request->harga_paket;
        $isi_paket = $request->isi_paket;
       

        $data= new data;
        $data->nama_paket = $nama_paket;
        $data->harga_paket = $harga_paket;
        $data->isi_paket= $isi_paket;
        $data->save();

        Session::flash("flash_notification",[
            "level"=>"succes",
            "message"=>"Berhasil menyimpan $data->nama_paket"
        ]);

        return redirect()->route('data.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= Data::find($id);
        return view('data.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= Data::find($id);
        return view('data.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nama_paket = $request->nama_paket;
        $harga_paket = $request->harga_paket;
        $isi_paket = $request->isi_paket;
       

        $data= Data::find($id);
        $data->nama_paket = $nama_paket;
        $data->harga_paket = $harga_paket;
        $data->isi_paket= $isi_paket;
        if ($data->save()){

        Session::flash("flash_notification",[
            "level"=>"succes",
            "message"=>"Berhasil menyimpan $data->nama_paket"
        ]);
    }else{
        Session::flash("flash_notification",[
            "level"=>"danger",
            "message"=>"Gagal Mengubah $data->nama_paket"
        ]);
    }

        return redirect()->route('data.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= Data::find($id);
        if ($data->delete()){

       Session::flash("flash_notification",[
            "level"=>"succes",
            "message"=>"Berhasil menghapus $data->nama_paket"
        ]);
    }else{
        Session::flash("flash_notification",[
            "level"=>"danger",
            "message"=>"Gagal Menghapus $data->nama_paket"
        ]);
    }

        return redirect()->route('data.index');
}
}    