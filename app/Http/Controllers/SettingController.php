<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Retrieves all the settings from the database and returns a view for editing the settings.
    *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * */
    public function edit()
    {
        $settings = Setting::all()->keyBy('name');
        return view('dashboard.settings', compact('settings'));
    }

    /**
     * Updates the settings in the database and returns a view for editing the settings.
     *
     */
    public function update(Request $request)
    {
        $rules = [];
        
        foreach ($request->all() as $key => $value) {
            $rules[$key] = 'required|string|max:1024';
        }

        $request->validate($rules);

        foreach ($request->all() as $key => $value) {
            Setting::where('name', $key)->update(['value' => $value]);
        }

        return redirect()->route('dashboard.settings.edit')->with('success' , __('Updated Successfully'));
    }
}
