<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarMakers;
use DateTime;

class CarMakerAddLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request){
        $date = new DateTime();

        $carMaker = new CarMakers();
        $carMaker->company = $request->carMaker;
        $carMaker->percentage = $request->carMakerMultiplier;
        $carMaker->created_at = $date->getTimestamp();
        $carMaker->updated_at = $date->getTimestamp();
        $carMaker->save();

        return response()->json([
            'carmaker'=>$carMaker,
        ]);

    }
}

