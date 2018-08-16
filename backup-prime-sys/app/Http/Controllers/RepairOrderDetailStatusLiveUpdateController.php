<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RepairOrders;
use App\RepairOrderDetails;

class RepairOrderDetailStatusLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request){
        $order = RepairOrderDetails::where('id','=',$request->serviceID)->first();
        $order->status = $request->serviceStatus;
        $order->save();

        $validate = RepairOrderDetails::where('orderID','=',$request->orderID)->get();
        $holder = true;
        if(isset($validate)){
            foreach($validate as $info){
                if($info->status=="Processing"){
                    $holder = false;
                }
            }
        }

        if($holder ==true){
       
            $repairorder = RepairOrders::where('id','=',$request->orderID)->first();
            $repairorder->order_status = 'Completed';
            $repairorder->save();
        }

        return response()->json();
    }
}
