<?php

namespace App\Http\Controllers;

use App\RepairOrders;
use App\SupplierOrders;
use App\Suppliers;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $s = SupplierOrders::all();
        $o = RepairOrders::all();
        foreach ($s as $x){
            $x['color'] ="99baef";
            $x['supname']= self::getSupplier($x->supplierID)['name'];
        }

        foreach ($o as $z){
            $z['color'] ="a7fc79";
        }

        return view('schedule')
            ->with('SOschedules',$s);
    }
    public static function getSupplier($id){
        return Suppliers::find($id);
    }
}
