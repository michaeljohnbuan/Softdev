<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\FoodRequest;

class ViewRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //show data
        $viewrequests =  FoodRequest::all();
        return view('viewrequest.index',['viewrequests' => $viewrequests]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viewrequest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'user_name'=> 'required',
        'foodtype'=> 'required',
        'foodlevel' => 'required',
        'population' => 'required',
        'date' => 'required',
        'evac_name' => 'required',
        'latitude' => 'required',
        'longtitude' => 'required',
        'address' => 'required',
        'status' => 'required',
      ]);
       // create new data
        $viewrequest = new viewrequest;
        $viewrequest->user_name = $request->user_name;
        $viewrequest->foodtype = $request->foodtype;
        $viewrequest->foodlevel = $request->foodlevel;
        $viewrequest->population = $request->population;
        $viewrequest->date = $request->date;
        $viewrequest->evac_name = $request->evac_name;
        $viewrequest->latitude = $request->latitude;
        $viewrequest->longtitude = $request->longtitude;
        $viewrequest->address = $request->address;
        $viewrequest->status = $request->status;
        $viewrequest->save();
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $viewrequest = FoodRequest::findOrFail($id);
        // return to the edit views
        return view('viewrequest.edit',compact('viewrequest'));
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
        // validation
        $this->validate($request,[
        'user_name'=> 'required',
        'foodtype'=> 'required',
        'foodlevel' => 'required',
        'population' => 'required',
        'date' => 'required',
        'evac_name' => 'required',
        'latitude' => 'required',
        'longtitude' => 'required',
        'address' => 'required',
        'status' => 'required',
        ]);
        $viewrequest = FoodRequest::findOrFail($id);
        $viewrequest->user_name = $request->user_name;
        $viewrequest->foodtype = $request->foodtype;
        $viewrequest->foodlevel = $request->foodlevel;
        $viewrequest->population = $request->population;
        $viewrequest->date = $request->date;
        $viewrequest->evac_name = $request->evac_name;
        $viewrequest->latitude = $request->latitude;
        $viewrequest->longtitude = $request->longtitude;
        $viewrequest->address = $request->address;
        $viewrequest->status = $request->status;
        $viewrequest->save();

        return redirect()->route('viewrequest.index')->with('alert-success','Data has been saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $viewrequest = FoodRequest::findOrFail($id);
        $viewrequest->delete();
        return redirect()->route('viewrequest.index')->with('alert-success','Data has been saved!');
    }
}
