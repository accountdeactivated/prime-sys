<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RepairOrders;
use App\RepairOrderDetails;

use DateTime;

class RepairServiceAddLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request){
        $date = new DateTime();

        $order = new RepairOrders();
        $order->clientID = $request->clientName;
        $order->carID = $request->carModel;
        $order->orderDate = date('Y-m-d');
        $order->orderDeadline = $request->expectedDeadline;
        $order->order_status = 'Processing';
        $order->payment_status = 'Processing';
        $order->totalAmount = $request->totalPrice;
        $order->created_at = $date->getTimestamp();
        $order->updated_at = $date->getTimestamp();
        $order->save();

        foreach($request->services as $info){
            $detail = new RepairOrderDetails();
            $detail->orderID = $order->id;
            $detail->serviceID = $info;
            $detail->status = 'Processing'; 
            $detail->created_at = $date->getTimestamp();
            $detail->updated_at = $date->getTimestamp();
            $detail->save();
        }
        return response()->json([
            'order'=>$order,
            'detail'=>$detail,
        ]);

    }
}
