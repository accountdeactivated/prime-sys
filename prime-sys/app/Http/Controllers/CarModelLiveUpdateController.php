<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;

class CarModelLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request){
        
        $cars= Cars::where('makerID','=',$request->carMaker)->get();
        return response()->json([
            'cars'=>$cars,
        ]);

    }
}
