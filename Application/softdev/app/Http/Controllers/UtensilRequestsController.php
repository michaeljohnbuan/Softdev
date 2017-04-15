<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UtensilRequest;
use Auth;

class UtensilRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utensil_request = UtensilRequest::all();

        return $utensil_request;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('utensils.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $utensilsforString = implode(",", $request->get('utensilsfor'));

        $utensil_request = new UtensilRequest;
        $utensil_request->user_id = Auth::user()->id;
        $utensil_request->user_name = Auth::user()->name;
        $utensil_request->utensilsfor = $utensilsforString;
        $utensil_request->population = $request->population;
        $utensil_request->date = $request->date;
        $utensil_request->evac_name = $request->evac_name;
        $utensil_request->latitude = $request->latitude;
        $utensil_request->longtitude = $request->longtitude;
        $utensil_request->address = $request->address;
        $utensil_request->status = $request->status;
        $utensil_request->save();
        return redirect()->route('viewrequestforutensils.index')->with('alert-success','Data has been saved!');
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
    public function update(Request $request, $id)
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
        //
    }
}
