<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;

class ServiceEditLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request){
        $service = Services::where('id','=',$request->serviceID)->first();

        $service->name = $request->serviceName;
        $service->type = $request->serviceType;
        $service->description = $request->serviceDescription;
        $service->cost = $request->serviceCost;
        $service->save();

        return response()->json([
            'service'=>$service,
        ]);

    }
}
