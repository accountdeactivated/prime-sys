<?php

namespace App\Http\Controllers;

use App\Clients;
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
            $z['clname'] = self::getClient($z->clientID)['name'];
            if ($z['payment_status'] == 'Processing'){
                $z['color'] ="e5f442" ;
            }
            else{

                $z['color'] ="a7fc79";
            }
        }

        return view('schedule')
            ->with('SOschedules',$s)
            ->with('ROschedules',$o);
    }
    public static function getSupplier($id){
        return Suppliers::find($id);
    }
    public static function getClient($id){
        return Clients::find($id);
    }
}
