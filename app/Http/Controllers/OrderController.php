<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$zamowienia = new Order();
       // $zamowienia = $zamowienia->paginate(10);
        $zamowienia = Order::all()->toArray();
         return $zamowienia;
        //return response()->json($zamowienia);
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
        $zamowienia = new Order();
        $zamowienia->id_kontrahenta = $request->id_kontrahenta;
        $zamowienia->nr_zamowienia = $request->nr_zamowienia;
        $zamowienia->status_zamowienia = $request->status_zamowienia;
        $zamowienia->wartosc_zamowienia = $request->wartosc_zamowienia;
        $zamowienia->save();
        return response()->json(["response"=>$zamowienia]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $zamowienia
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return response()->json($order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $zamowienia
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $zamowienia)
    {
        response()->json("edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $order->id_kontrahenta = $request->id_kontrahenta;
        $order->nr_zamowienia = $request->nr_zamowienia;
        $order->status_zamowienia = $request->status_zamowienia;
        $order->wartosc_zamowienia = $request->wartosc_zamowienia;
        $order->save();

        return response()->json(["status"=>"updated", "model"=>$order]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return response()->json(["status"=>"deleted"]);
    }
}
