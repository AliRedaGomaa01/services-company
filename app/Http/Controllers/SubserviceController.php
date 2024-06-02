<?php

namespace App\Http\Controllers;

use App\Models\Subservice;
use Illuminate\Http\Request;
use App\Traits\SaveImageTrait;
use App\Http\Requests\SubserviceRequest;
use App\Services\ServiceService;

class SubserviceController extends Controller
{
    use SaveImageTrait;

    public function __construct(public ServiceService $serviceService)
    {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subservices = Subservice::all();
        return view('dashboard.subservices.index', compact('subservices'));
    }
/**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = $this->serviceService->getAllWithIdTitle();
        return view('dashboard.subservices.create' , compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = (new SubserviceRequest())->rules();
        $rules['image'] = ['required' , 'image' , 'max:10240'];

        $validated = $request->validate($rules);

        // save image
        $image = $this->saveImage($request, '/subservices');
        // save subservice data 
        $subservice = new Subservice();
        $subservice->image_id = $image->id;
        $subservice->service_id = $validated['service_id'];
        $subservice->title_ar = $validated['title_ar'];
        $subservice->title_en = $validated['title_en'];
        $subservice->description_ar = $validated['description_ar'];
        $subservice->description_en = $validated['description_en'];
        $subservice->save();
        // redirect to subservice index
        return redirect()->route('dashboard.subservices.index')->with('success', 'Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subservice $subservice)
    {
        return view('dashboard.subservices.show', compact('subservice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subservice $subservice)
    {
        $services = $this->serviceService->getAllWithIdTitle();
        return view('dashboard.subservices.edit', compact('subservice' , 'services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subservice $subservice)
    {
        $rules = (new SubserviceRequest())->rules();
        $rules['image'] = ['nullable' , 'image' , 'max:10240'];

        $validated = $request->validate($rules);

        if ($request->has('image')) {
            // delete old image
            $subservice->image()->delete();
            // save image
            $image = $this->saveImage($request, '/subservices');
            $subservice->image_id = $image->id;
        }
        // save subservice data 
        $subservice->service_id = $validated['service_id'];
        $subservice->title_ar = $validated['title_ar'];
        $subservice->title_en = $validated['title_en'];
        $subservice->description_ar = $validated['description_ar'];
        $subservice->description_en = $validated['description_en'];
        $subservice->save();
        // redirect to subservice index
        return redirect()->route('dashboard.subservices.index')->with('success', 'Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subservice $subservice)
    {
        $subservice->delete();
        return redirect()->route('dashboard.subservices.index')->with('success', 'Deleted Successfully.');
    }
}
