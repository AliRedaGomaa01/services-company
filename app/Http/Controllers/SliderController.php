<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use App\Traits\SaveImageTrait;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use SaveImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('dashboard.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = (new SliderRequest())->rules();
        $rules['image'] = ['required' , 'image' , 'max:10240'];

        $validated = $request->validate($rules);

        // save image
        $image = $this->saveImage($request, '/sliders');
        // save slider data 
        $slider = new Slider();
        $slider->image_id = $image->id;
        $slider->title_ar = $request->title_ar;
        $slider->title_en = $request->title_en;
        $slider->description_ar = $request->description_ar;
        $slider->description_en = $request->description_en;
        $slider->save();
        // redirect to slider index
        return redirect()->route('dashboard.sliders.index')->with('success', 'Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('dashboard.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        $rules = (new SliderRequest())->rules();
        $rules['image'] = ['nullable' , 'image' , 'max:10240'];

        $validated = $request->validate($rules);

        if ($request->has('image')) {
            // delete old image
            $slider->image()->delete();
            // save image
            $image = $this->saveImage($request, '/sliders');
            $slider->image_id = $image->id;
        }
        // save slider data 
        $slider->title_ar = $request->title_ar;
        $slider->title_en = $request->title_en;
        $slider->description_ar = $request->description_ar;
        $slider->description_en = $request->description_en;
        $slider->save();
        // redirect to slider index
        return redirect()->route('dashboard.sliders.index')->with('success', 'Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('dashboard.sliders.index')->with('success', 'Deleted Successfully.');
    }
}
