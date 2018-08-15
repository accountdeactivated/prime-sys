<?php

namespace App\Http\Controllers;

use App\Materials;
use App\SupplierOrderDetails;
use App\SupplierOrders;
use App\Suppliers;
use Illuminate\Http\Request;

class SupplierOrdersController extends Controller
{
    /**
     * Display a listing of the resource.

     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sup = Suppliers::all();
        $sup = $sup->reverse();
        $mat = Materials::all();
        $supOrder = SupplierOrders::all();
        $supOrder = $supOrder->reverse();



        foreach($supOrder as $sp){
            $sp['supplierorderdetails'] = $this->getSOsDetailbySOID($sp->id);
            $sp['supplier'] = $this->getSupplier($sp->supplierID);
        }

        return view('supplierorder')
            ->with('suppliersorders', $supOrder)
            ->with('suppliers', $sup)
            ->with('materials', $mat);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajaxGetPOdetails(Request $request)
    {
        $sup = SupplierOrders::find($request->po_number);
        $sup['orderdetails'] = $this->getSOsDetailbySOID($sup->id);

        foreach ($sup['orderdetails'] as $det){
            $mat = self::getMaterialBySOID($det['materialID']);
            $det['materialName'] = $mat['name'];
        }

        return response()->json([
            'supplierorder'=>$sup,
            'orderdetails'=> $sup['orderdetails']
        ]);
    }

    public static function getMaterialBySOID($id){
        return Materials::find($id);
    }
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
    public function store(Request $request)
    {
        //create a supplier and supplier order
        $supOrd = new SupplierOrders();
        $materials=$request->materials;
        $qtys=$request->qtys;
        $prices=$request->prices;
        $total = 0;
        $sum = 0;
        $c = 0;

        foreach ($qtys as $qty){
            $total += $qty;
            $sum += $prices[$c] * $qty;
        }

        $supOrd->supplierID = $request->supplier;
        $supOrd->total_qty = $total;
        $supOrd->total_price = $sum;
        $supOrd->posted_date = $request->posted_date;

        $supOrd->save();

        $supOrd->created_at = null;
        $supOrd->updated_at = null;

        $last_insert_id = $supOrd->id;
        $ctr=0;

        foreach($materials as $material){
            $supOrdDet = new SupplierOrderDetails();
            $supOrdDet->materialID = $material;
            $supOrdDet->supplierOrderID = $last_insert_id;
            $supOrdDet->price_each = $prices[$ctr];
            $supOrdDet->qty = $qtys[$ctr];
            $sum += $supOrdDet->price_each;
            $supOrdDet->total_price = $prices[$ctr] * $qtys[$ctr];
            $supOrdDet->save();

            $mt = self::getMaterialBySOID($supOrdDet->materialID);
            $mt->current_qty = $mt->current_qty + $supOrdDet->qty;
            $mt->save();

            $ctr+=1;
        }

        return redirect("/supplierOrder");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
