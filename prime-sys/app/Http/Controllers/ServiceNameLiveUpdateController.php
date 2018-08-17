<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;

class ServiceNameLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request){
        $service =  Services::where('id','=',$request->serviceName)->first();
        $cost = 'PHP '.$service->cost;
        $price = $service->cost;
        return response()->json([
            'cost'=>$cost,
            'price'=>$price,
        ]);

    }
}
