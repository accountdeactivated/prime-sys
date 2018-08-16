<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RepairOrders;

class RepairOrderStatusLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request){
        $order = RepairOrders::where('id','=',$request->orderID)->first();
        $order->payment_status = $request->paymentStatus;
        $order->save();

        return response()->json();
    }
}
