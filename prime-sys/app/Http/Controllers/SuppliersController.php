<?php

namespace App\Http\Controllers;

use App\Materials;
use App\SupplierOrderDetails;
use App\SupplierOrders;
use App\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sup = Suppliers::all();
        $mat = Materials::all();
        $supOrder = SupplierOrders::all();
        $sup = $sup->reverse();
        $supOrder = $supOrder->reverse();


        foreach($supOrder as $sp){
           $sp['supplierorderdetails'] = $this->getSOsDetailbySOID($sp->id);
           $sp['supplier'] = $this->getSupplier($sp->supplierID);
        }

        return view('supplier')
            ->with('suppliersorders', $supOrder)
            ->with('suppliers', $sup)
            ->with('materials', $mat);
    }
    public static function getMaterialBySOID($id){
        return Materials::find($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function getSOsDetailbySOID($id){
        $so = SupplierOrderDetails::all();

        $so = $so->filter(function ($so) use ($id) {
            return $so->supplierOrderID == $id;
        });

        return $so;
    }
    public static function getSupplier($id){
        $sup = Suppliers::where('id',$id)->first();
        return $sup;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->all();
        $driver = new Suppliers();


        $driver->name = $fields['name'];
        $driver->address = $fields['address'];
        $driver->contactPerson = $fields['contactPerson'];
        $driver->ContactNumber = $fields['contactNumber'];

        $driver->created_at = null;
        $driver->updated_at = null;
        $driver->save();
        Session::flash('success','Successfully added a fucking supplier!');
        return redirect("/supplier");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
