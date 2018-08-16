<?php

namespace App\Http\Controllers;

use App\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpKernel\Client;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cl = Clients::all();
        return view('clients')
            ->with("clients",$cl);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $c = Clients::find($request->id);
        $c->name = $request->name;
        $c->email = $request->email;
        $c->contact = $request->contact;
        $c->address = $request->address;
        $c->save();

        Session::flash('success_update','Successfully updated credentials!');
        return redirect('/clients');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c = new Clients();
        $c->name = $request->clientname;
        $c->email = $request->clientemail;
        $c->contact = $request->clientcontact;
        $c->address = $request->clientaddress;
        $c->save();

        Session::flash('success_create','Successfully created a client!');
        return redirect('/clients');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Clients::find($id);
        $product->delete();

        Session::flash('success_delete','Successfully deleted');
        return redirect("/clients");
    }
}
