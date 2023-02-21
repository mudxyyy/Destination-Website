<?php

namespace App\Http\Controllers;

use App\Models\destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function home()
    {
        $data = destination::all();
        return view('home', compact('data'));
    }

    public function detail(destination $destination)
    {
        return view('detail', compact('destination'));
    }

    public function search(request $request)
    {
        $search = $request->search;

        $data = destination::where('name', 'like', "%" . $search . "%")->get();

        return view('home', compact('data'));
    }

    public function cari(request $request)
    {
        $cari = $request->cari;

        $data = destination::where('name', 'like', "%" . $cari . "%")->get();

        return view('admin', compact('data'));
    }

}

