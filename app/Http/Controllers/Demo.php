<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Tour;

class Demo extends Controller
{
    //
    function demo1()
    {
        $id = "1";
        $l = Location::find($id);
        return View('demo.demo1',['l'=>$l]);
    }
    function demo2()
    {
        return View('demo.demo2',['data'=>Tour::all()]);
    }
}
