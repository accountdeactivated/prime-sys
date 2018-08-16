<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;

class ServiceTypeLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request){

        $service =  Services::where('id','=',$request->serviceType)->get();
        
        return response()->json([
            'services'=>$service,
        ]);

    }
}
