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
    public function create(Request $request)
    {
        //create a supplier and supplier order
        $supOrd = new SupplierOrders();
        $materials=$request->materials;
        $qtys=$request->qtys;
        $prices=$request->prices;
        $total = 0;
        $sum = 0;

        foreach ($qtys as $qty){
            $total += $qty;
        }
        foreach ($prices as $price){
            $sum += $price;
        }


        $supOrd->supplierID = $request->supplier;
        $supOrd->total_qty = $total;
        $supOrd->posted_date = $request->postdate." 00:00:00";
        $supOrd->total_price = $sum;
        $supOrd->save();

        $supOrd->created_at = null;
        $supOrd->updated_at = null;

        $last_insert_id = $supOrd->id;
        $ctr=0;
        foreach ($materials as $material){


            $supOrdDet = new SupplierOrderDetails();
            $supOrdDet->materialID = $material;
            $supOrdDet->supplierOrderID = $last_insert_id;
            $supOrdDet->price_each = $prices[$ctr];
            $supOrdDet->qty = $qtys[$ctr];
            $supOrdDet->total_price = $prices[$ctr] * $qtys[$ctr];

            $supOrdDet->save();


            $mt = self::getMaterialBySOID($supOrdDet->id);
            $mt->current_qty = $mt->current_qty - $supOrdDet;

            $ctr+=1;
        }
        return redirect("/supplierOrder");
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
        //Session::flash('success','Successfully added a fucking supplier!');
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
