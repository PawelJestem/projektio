<?php

namespace App\Http\Controllers;

use App\Models\Order_item;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pozycja_zamowienia = Order_item::all()->toArray();
        return $pozycja_zamowienia;   
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
        $order_item = new Order_item;
        $order_item->nazwa = $request->nazwa;
        $order_item->ilosc = $request->ilosc;
        $order_item->id_zamowienia = $request->id_zamowienia;
        $order_item->cena_netto = $request->cena_netto;
        $order_item->wartosc_zamowienia = $request->wartosc_zamowienia;
        $order_item->save();
        return response()->json(["response"=>$order_item]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function show(Order_item $order_item)
    {
        return response()->json($order_item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function edit(Order_item $order_item)
    {
        response()->json("edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order_item $order_item)
    {
        $order_item->nazwa = $request->nazwa;
        $order_item->ilosc = $request->ilosc;
        $order_item->id_zamowienia = $request->id_zamowienia;
        $order_item->cena_netto = $request->cena_netto;
        $order_item->wartosc_zamowienia = $request->wartosc_zamowienia;
        $order_item->save();

        return response()->json(["status"=>"updated", "model"=>$order_item]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order_item $order_item)
    {
        $order_item->delete();
        return response()->json(["status"=>"deleted"]);
    }
}
