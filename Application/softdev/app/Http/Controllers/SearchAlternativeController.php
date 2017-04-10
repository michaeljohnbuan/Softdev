<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;

use App\SearchAlternative;

class SearchAlternativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $search = \Request::get('search');
        $searchalternatives = SearchAlternative::where('place','like','%'.$search.'%')->orderBy('id')->paginate(3);
        return view('searchalternative.index',['searchalternatives' => $searchalternatives]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('searchalternative.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // validation
      $this->validate($request,[
      'place'=> 'required',
      'alternative' => 'required',
    ]);
      // create new data
    $searchalternative = new searchalternative;
    $searchalternative->place = $request->place;
    $searchalternative->alternative = $request->alternative;
    $searchalternative->save();
    return redirect()->route('searchalternative.index')->with('alert-success','Data has been Saved!');

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
         $searchalternative = SearchAlternative::findOrFail($id);
        // return to the edit views
        return view('searchalternative.edit',compact('searchalternative'));
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
          'place'=> 'required',
          'alternative' => 'required',
      ]);

        $searchalternative = SearchAlternative::findOrFail($id);
        $searchalternative->place = $request->place;
        $searchalternative->alternative = $request->alternative;
        $searchalternative->save();

        return redirect()->route('searchalternative.index')->with('alert-success','Data has been Saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $searchalternative = SearchAlternative::findOrFail($id);
        $searchalternative->delete();
        return redirect()->route('searchalternative.index')->with('alert-success','Data has been Saved!');
    }
    
}
