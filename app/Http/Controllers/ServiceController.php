<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Traits\SaveImageTrait;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{
    use SaveImageTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('dashboard.services.index', compact('services'));
    }
/**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = (new ServiceRequest())->rules();
        $rules['image'] = ['required' , 'image' , 'max:10240'];

        $validated = $request->validate($rules);

        // save image
        $image = $this->saveImage($request, '/services');
        // save service data 
        $service = new Service();
        $service->image_id = $image->id;
        $service->title_ar = $request->title_ar;
        $service->title_en = $request->title_en;
        $service->description_ar = $request->description_ar;
        $service->description_en = $request->description_en;
        $service->save();
        // redirect to service index
        return redirect()->route('dashboard.services.index')->with('success', 'Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('dashboard.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('dashboard.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $rules = (new ServiceRequest())->rules();
        $rules['image'] = ['nullable' , 'image' , 'max:10240'];

        $validated = $request->validate($rules);

        if ($request->has('image')) {
            // delete old image
            $service->image()->delete();
            // save image
            $image = $this->saveImage($request, '/services');
            $service->image_id = $image->id;
        }
        // save service data 
        $service->title_ar = $request->title_ar;
        $service->title_en = $request->title_en;
        $service->description_ar = $request->description_ar;
        $service->description_en = $request->description_en;
        $service->save();
        // redirect to service index
        return redirect()->route('dashboard.services.index')->with('success', 'Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('dashboard.services.index')->with('success', 'Deleted Successfully.');
    }
}
