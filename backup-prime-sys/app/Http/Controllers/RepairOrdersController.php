<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RepairOrders;
use App\RepairOrderDetails;
use App\CarMakers;
use App\Services;
use App\Clients;

class RepairOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repairorders = RepairOrders::all();
        $carmakers = CarMakers::all();
        $services = Services::all();
        $clients = Clients::all();
        
        return view('repairorder')
                ->with('orders',$repairorders)
                ->with('services',$services)
                ->with('clients',$clients)
                ->with('carmakers',$carmakers);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = RepairOrders::where('id','=',$id)->first();
        $detail = RepairOrderDetails::where('orderID','=',$id)->get();
        return view('repairorderdetail')
                    ->with('details',$detail)
                    ->with('order',$order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
    }
}
