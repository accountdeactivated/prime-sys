<?php

namespace App\Http\Controllers;

use App\SupplierOrders;
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

        //it was return view('home') before.
        return view('schedule')
            ->with('schedules',$s);
    }
}
