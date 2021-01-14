<?php

namespace App\Http\Controllers;

use App\Models\zamowienia;
use Illuminate\Http\Request;

class ZamowieniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        response()->json("index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $zamowienia = new zamowienia;
        $zamowienia->id_kontrahenta = $request->id_kontrahenta;
        $zamowienia->nr_zamowienia = $request->nr_zamowienia;
        $zamowienia->status_zamowienia = $request->status_zamowienia;
        $zamowienia->wartosc_zamowienia = $request->wartosc_zamowienia;
        $zamowienia->save();
        response()->json(["response"=>$zamowienia]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\zamowienia  $zamowienia
     * @return \Illuminate\Http\Response
     */
    public function show(zamowienia $zamowienia)
    {
        response()->json("show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\zamowienia  $zamowienia
     * @return \Illuminate\Http\Response
     */
    public function edit(zamowienia $zamowienia)
    {
        response()->json("edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\zamowienia  $zamowienia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, zamowienia $zamowienia)
    {
        $zamowienia->id_kontrahenta = $request->id_kontrahenta;
        $zamowienia->nr_zamowienia = $request->nr_zamowienia;
        $zamowienia->status_zamowienia = $request->status_zamowienia;
        $zamowienia->wartosc_zamowienia = $request->wartosc_zamowienia;
        $zamowienia->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\zamowienia  $zamowienia
     * @return \Illuminate\Http\Response
     */
    public function destroy(zamowienia $zamowienia)
    {
        $zamowienia -> delete();
        response()->json("siema");
    }
}
