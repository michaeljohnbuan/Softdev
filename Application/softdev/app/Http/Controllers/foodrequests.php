<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FoodRequest;
use Auth;

class foodrequests extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food_request = FoodRequest::all();

        return view('request.index',['request' => $food_request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('request.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $foodtypeString = implode(",", $request->get('foodtype'));
        

        $food_request = new FoodRequest;
        $food_request->user_id = Auth::user()->id;
        $food_request->user_name = Auth::user()->name;
        $food_request->foodtype = $foodtypeString;
        $food_request->foodlevel = $request->foodlevel;
        $food_request->population = $request->population;
        $food_request->date = $request->date;
        $food_request->evac_name = $request->evac_name;
        $food_request->latitude = $request->latitude;
        $food_request->longtitude = $request->longtitude;
        $food_request->address = $request->address;
        $food_request->status = $request->status;
        $food_request->save();
        return redirect()->route('viewrequest.index')->with('alert-success','Data has been saved!');

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
