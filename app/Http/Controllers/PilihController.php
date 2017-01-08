<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Pilih;
use Auth;
use Session;
use App\Holiday;

class PilihController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pilih = Pilih::paginate(6);
        $pilih= Pilih::with('holiday')->paginate(6);
        // dd($pilih);
        $nama="testing";
        

        return view ('pilih.index',compact('pilih','nama')); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $holiday = Holiday::all();
       

        return view ('pilih.create',compact('holiday'));
       //return view ('post.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $nama  = $request->nama;
      $tanggal  = $request->tanggal;
      $holiday_id  = $request->holiday_id;
      
     


      $pilih = new Pilih; 
      $pilih->nama = $nama;
      $pilih->tanggal = $tanggal;
      $pilih->holiday_id = $holiday_id;
      $pilih->save();

      Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan $pilih->nama"

      ]);

      return redirect()->route ('pilih.create'); // //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $pilih= Pilih::find($id);
       return view('pilih.show',compact('pilih')); //   //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $pilih = Pilih::find($id);
       return view ('pilih.edit',compact('pilih'));  //
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
      $nama  = $request->nama;
      $tanggal  = $request->tanggal;
      $holiday_id  = $request->holiday_id;
    
     


      $pilih= Pilih::find($id);
      $pilih->nama = $nama;
      $pilih->tanggal = $tanggal;
      $pilih->holiday_id = $holiday_id;
      $pilih->save();
    if ($pilih->save())  {

      Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengubah $pilih->nama"

      ]);
     } else {
    Session::flash("flash_notification", [
        "level"=>"danger",
        "message"=>"Gagal mengubah $pilih->nama"
        ]);
     }

      return redirect()->route ('pilih.index'); //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $pilih = Pilih::find($id);
     if ($pilih->delete())  {

      Session::flash("flash_notification", [
        "level"=>"success",       
        "message"=>"Berhasil menghapus $pilih->nama"

      ]);
     } else {
    Session::flash("flash_notification", [
        "level"=>"danger",
        "message"=>"Gagal menghapus $pilih->nama"
        ]);
     }

      return redirect()->route ('pilih.index');  //
    }

    public function holiday()
    {
        return $this->hasMany('App\Holiday'); //
    }
}
