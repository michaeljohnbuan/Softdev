<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessMapController extends Controller
{
    public function index()
    {
        return view('accessmap.access_map_here');
    }

    public function accessUtensils()
    {
        return view('accessmaputensils.access_map_here');
    }


}
