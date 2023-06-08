<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class sliderController extends Controller
{
    public function index()
    {
        $data = Slider::all();
        return view('slider.slider',["title" => "slider" , "data" => $data] , compact('data'));
    }

    public function create()
    {
        return view('slider.slider-create',["title" => "slider-create"]);
    }

    public function store(Request $request)
    {
        //validate form
        $validate = $this->validate($request, [
            'image'     => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'     => 'required|min:5'
        ]);
    
        
        if($request->file('image')){
            $validate['image'] = $request->file('image')->storeAs('image');
        }
        
        Slider::create($request->all());

        return redirect('/slider');
    }

    public function delete($id)
    {
        $data = Slider::find($id)->delete();
        return Redirect('/slider');
    }
}
