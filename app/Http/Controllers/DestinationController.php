<?php

namespace App\Http\Controllers;

use App\Models\destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function home()
    {
        $data = destination::all();
        return view('home',compact('data'));
    }

    public function detail(destination $destination)
    {
        return view('detail',compact('destination'));
    }
}
