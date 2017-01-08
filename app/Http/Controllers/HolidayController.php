<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Holiday;
use Auth;
use Session;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $holiday = Holiday::all();
        // dd($holiday);
        $nama_paket = "testing";
        

        return view ('holiday.index',compact('holiday', 'testing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('holiday.create');
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
       

        $holiday= new holiday;
        $holiday->nama_paket = $nama_paket;
        $holiday->harga_paket = $harga_paket;
        $holiday->isi_paket= $isi_paket;
        $holiday->save();

        Session::flash("flash_notification",[
            "level"=>"succes",
            "message"=>"Berhasil menyimpan $holiday->nama_paket"
        ]);

        return redirect()->route('holiday.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $holiday= Holiday::find($id);
        return view('holiday.show',compact('holiday'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $holiday= Holiday::find($id);
        return view ('holiday.edit',compact('holiday'));
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
      
      $holiday= Holiday::find($id);
      $holiday->nama_paket = $nama_paket;
      $holiday->harga_paket = $harga_paket;
      $holiday->isi_paket = $isi_paket;
      $holiday->save();
    if ($holiday->save())  {

      Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengubah $holiday->nama_paket"

      ]);
     } else {
    Session::flash("flash_notification", [
        "level"=>"danger",
        "message"=>"Gagal mengubah $holiday->nama_paket"
        ]);
     }

      return redirect()->route ('holiday.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $holiday = Holiday::find($id);
     if ($holiday->delete())  {

      Session::flash("flash_notification", [
        "level"=>"success",       
        "message"=>"Berhasil menghapus $holiday->nama_paket"

      ]);
     } else {
    Session::flash("flash_notification", [
        "level"=>"danger",
        "message"=>"Gagal menghapus $holiday->name_paket"
        ]);
     }

      return redirect()->route ('holiday.index');
}

}
