<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;
use App\CarMakers;
use DateTime;

class CarAddLiveUpdateController extends Controller
{
    public function liveUpdate(Request $request){
        $date = new DateTime();

        $car = new Cars();
        $carmaker = CarMakers::where('id','=',$request->carMaker)->first();
        $car->makerID = $carmaker->id;
        $car->model = $request->carModel;
        $car->year = $request->carYearModel;
        $car->created_at = $date->getTimestamp();
        $car->updated_at = $date->getTimestamp();
        $car->save();

        return response()->json([
            'car'=>$car,
            'carmaker'=>$carmaker->company,
        ]);

    }
}

