<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function admin()
    {
        $data = destination::all();
        return view('admin',compact('data'));
    }

    public function add()
    {
        $category = category::all();
        return view('add',compact('category'));
    }

    public function postadd(request $request)
    {
        $request->validate([
            'category_id'=>'required',
            'name'=>'required',
            'address'=>'required',
            'locationlink'=>'required',
            'description'=>'required',
            'image'=>'required|file|image'
        ]);

        destination::create([
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'address'=>$request->address,
            'locationlink'=>$request->locationlink,
            'description'=>$request->description,
            'image'=>$request->image->store('images')
        ]);

        return redirect()->route('admin')->with('status','Add Successfully');
    }

    public function edit(destination $destination)
    {
        $category = category::all();
        return view('edit',compact('destination','category'));
    }

    public function postedit(request $request, destination $destination)
    {
        $request->validate([
            'category_id'=>'required',
            'name'=>'required',
            'address'=>'required',
            'locationlink'=>'required',
            'description'=>'required',
            'image'=>'nullable|sometimes|file|image',
        ]);

        if ($request->image) {
            if (File::exists($destination->image)) {
                unlink($destination->image);
                $img = $request->image->store('images');
            } else {
                $img = $request->image->store('images');
            }

        } else {
            $img = $destination->image;
        }

        $destination->category_id = $request->category_id;
        $destination->name = $request->name;
        $destination->address = $request->address;
        $destination->locationlink = $request->locationlink;
        $destination->description = $request->description;
        $destination->image = $img;
        $destination->save();

        return redirect()->route('admin')->with('status','Edit Successfully');
    }
}
