<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tour;
use Auth;
use Session;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tour = Tour::all();

        return view('tour.index', compact('tour'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        return view('tour.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->nama;
        $isi_paket= Auth::user()->id;

        $tour= new tour;
        $tour->nama = $nama;
        $tour->isi_paket= $isi_paket;
        $tour->save();

        session::flash("flash_notification",[
            "level"=>"succes",
            "message"=>"Berhasil menyimpan $tour->nama"
        ]);

        return redirect()->route('tour.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tour = Tour::find($id);
        return view('tour.show', compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = Tour::find($id);
        return view('tour.edit', compact('tour'));
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
        $nama = $request->nama;
        $isi_paket= \Auth::user()->id;

        $tour= Tour::find($id);
        $tour->nama = $nama;
        $tour->isi_paket= $isi_paket;
        if ($tour->save()) {

        session::flash("flash_notification",[
            "level"=>"succes",
            "message"=>"Berhasil mengubah $tour->nama"
        ]);
    } else{
       session::flash("flash_notification",[
            "level"=>"danger",
            "message"=>"Gagal mengubah $tour->nama"
            ]); 
    }

        return redirect()->route('tour.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
