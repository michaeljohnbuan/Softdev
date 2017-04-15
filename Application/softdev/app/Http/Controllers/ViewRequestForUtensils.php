<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\UtensilRequest;

class ViewRequestForUtensils extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viewrequestsforutensils =  UtensilRequest::all();
        return view('viewrequestforutensils.index',['viewrequestsforutensils' => $viewrequestsforutensils]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viewrequestforutensils.create');
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
        'utensilsfor'=> 'required',
        'population' => 'required',
        'date' => 'required',
        'evac_name' => 'required',
        'address' => 'required',
        'status' => 'required',
      ]);
       // create new data
        $viewrequestforutensils = new viewrequestforutensils;
        $viewrequestforutensils->user_name = $request->user_name;
        $viewrequestforutensils->utensilsfor = $request->utensilsfor;
        $viewrequestforutensils->population = $request->population;
        $viewrequestforutensils->date = $request->date;
        $viewrequestforutensils->evac_name = $request->evac_name;
        $viewrequestforutensils->address = $request->address;
        $viewrequestforutensils->status = $request->status;
        $viewrequestforutensils->save();
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
         $viewrequestforutensils = UtensilRequest::findOrFail($id);
        // return to the edit views
        return view('viewrequestforutensils.edit',compact('viewrequestforutensils'));
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
         $this->validate($request,[
        
        'status' => 'required',
        ]);
        $viewrequestforutensils = UtensilRequest::findOrFail($id);
        $viewrequestforutensils->status = $request->status;
        $viewrequestforutensils->save();

        return redirect()->route('viewrequestforutensils.index')->with('alert-success','Data has been saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $viewrequestforutensils = UtensilRequest::findOrFail($id);
        $viewrequestforutensils->delete();
        return redirect()->route('viewrequestforutensils.index')->with('alert-success','Data has been saved!');
    }
}
