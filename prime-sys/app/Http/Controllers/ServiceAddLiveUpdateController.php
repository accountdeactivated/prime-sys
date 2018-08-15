<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use DateTime;

class ServiceAddLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request){
        $date = new DateTime();

        $service = new Services();
        $service->name = $request->serviceName;
        $service->type = $request->serviceType;
        $service->description = $request->serviceDescription;
        $service->cost = $request->serviceCost;
        $service->created_at = $date->getTimestamp();
        $service->updated_at = $date->getTimestamp();
        $service->save();

        return response()->json([
            'service'=>$service,
        ]);

    }
}
