<?php

namespace App\Http\Controllers;

use App\Models\JointVenture;
use Illuminate\Http\Request;
use App\Traits\SaveImageTrait;
use App\Http\Requests\JointVentureRequest;

class JointVentureController extends Controller
{
    use SaveImageTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jointVentures = JointVenture::all();
        return view('dashboard.joint-ventures.index', compact('jointVentures'));
    }
/**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.joint-ventures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = (new JointVentureRequest())->rules();
        $rules['image'] = ['required' , 'image' , 'max:10240'];

        $validated = $request->validate($rules);

        // save image
        $image = $this->saveImage($request, '/jointVentures');
        // save jointVenture data 
        $jointVenture = new JointVenture();
        $jointVenture->image_id = $image->id;
        $jointVenture->title_ar = $validated['title_ar'];
        $jointVenture->title_en = $validated['title_en'];
        $jointVenture->description_ar = $validated['description_ar'];
        $jointVenture->description_en = $validated['description_en'];
        $jointVenture->save();
        // redirect to jointVenture index
        return redirect()->route('dashboard.joint-ventures.index')->with('success', 'Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(JointVenture $jointVenture)
    {
        return view('dashboard.joint-ventures.show', compact('jointVenture'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JointVenture $jointVenture)
    {
        return view('dashboard.joint-ventures.edit', compact('jointVenture'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JointVenture $jointVenture)
    {
        $rules = (new JointVentureRequest())->rules();
        $rules['image'] = ['nullable' , 'image' , 'max:10240'];

        $validated = $request->validate($rules);

        if ($request->has('image')) {
            // delete old image
            $jointVenture->image()->delete();
            // save image
            $image = $this->saveImage($request, '/jointVentures');
            $jointVenture->image_id = $image->id;
        }
        // save jointVenture data 
        $jointVenture->title_ar = $validated['title_ar'];
        $jointVenture->title_en = $validated['title_en'];
        $jointVenture->description_ar = $validated['description_ar'];
        $jointVenture->description_en = $validated['description_en'];
        $jointVenture->save();
        // redirect to jointVenture index
        return redirect()->route('dashboard.joint-ventures.index')->with('success', 'Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JointVenture $jointVenture)
    {
        $jointVenture->delete();
        return redirect()->route('dashboard.joint-ventures.index')->with('success', 'Deleted Successfully.');
    }
}
