<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Agegroup; 
use Auth;

class AgegroupsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = \Request::get('search');
        $agegroups = Agegroup::where('user_name','like','%'.$search.'%')->orderBy('id')->paginate(2);
        return view('agegroups.index',['agegroups' => $agegroups]);
    }

    
    public function create()
    {
       return view('agegroups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agegroup = new Agegroup; 
        $agegroup->user_id = Auth::user()->id; 
        $agegroup->user_name = Auth::user()->name;
        $agegroup->toddler_kid = $request->toddler_kid; 
        $agegroup->teen = $request->teen; 
        $agegroup->older = $request->older; 
        $agegroup->seniorcitizen = $request->seniorcitizen; 
        $agegroup->total =  $agegroup->toddler_kid +  $agegroup->teen + $agegroup->older +
        $agegroup->seniorcitizen; 
        $agegroup->save();  
         return redirect()->route('agegroups.index')->with('alert-success', 'Data has been saved');
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
         $agegroup = Agegroup::findOrFail($id);
         return view('agegroups.edit', compact('agegroup'));
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
        $this->validate($request, [
            'toddler_kid' => 'required',
            'teen' => 'required',
            'older' => 'required', 
            'seniorcitizen' => 'required',
            ]);

        $agegroup = Agegroup::findOrFail($id);      
        $agegroup->toddler_kid = $request->toddler_kid; 
        $agegroup->teen = $request->teen; 
        $agegroup->older = $request->older; 
        $agegroup->seniorcitizen = $request->seniorcitizen; 
        $agegroup->total =  $agegroup->toddler_kid +  $agegroup->teen + $agegroup->older +
        $agegroup->seniorcitizen; 
         $agegroup->save();  
        return redirect()->route('agegroups.index')->with('alert-success', 'Data has been saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agegroup = Agegroup::findOrFail($id);      
        $agegroup->delete(); 

       return redirect()->route('agegroups.index')->with('alert-success', 'Data has been saved');
    }
}
