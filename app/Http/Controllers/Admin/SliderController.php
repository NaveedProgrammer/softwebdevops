<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = "slider_".time().".jpg";
            $file->move(storage_path('app/public/Files/slider/'),$filename);
            $input['image'] = $filename;
            $result = Slider::create($input);
            if($result){
                return redirect()->route('admin.slider.index')->with('success','New Slider Is created.');
            }else{
                unlink(storage_path('app/public/Files/slider/'.$filename));
                return redirect()->route('admin.slider.index')->with('error','Slider not created.');
            }
        }else{
            return redirect()->route('admin.slider.index')->with('warning','Slider Image is Required');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::where('id',$id)->first();
        return view('admin.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $input = $request->all();
        $slider = Slider::where('id',$input['id'])->first();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = "slider_".time().".jpg";
            $file->move(storage_path('app/public/Files/slider/'),$filename);
            $input['image'] = $filename;
            unlink(storage_path('app/public/Files/slider/'.$slider->image));
        }
        $result = $slider->update($input);
        if($result){
            return redirect()->route('admin.slider.index')->with('success','Slider is updated.');
        }else{
            return redirect()->route('admin.slider.index')->with('error','Slider not updated.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Slider::where('id',$id)->destroy();
        if($result){
            return redirect()->route('admin.slider.index')->with('success','Slider is deleted.');
        }else{
            return redirect()->route('admin.slider.index')->with('error','Slider not deleted.');
        }
    }
}
