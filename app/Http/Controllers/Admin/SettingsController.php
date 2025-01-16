<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingsController extends Controller
{
    // Display the settings form
    public function index()
    {

        // Retrieve all settings from the database
        $settings = Setting::pluck('value', 'key');
        return view('admin.settings.index', compact('settings'));
    }

    // Store the settings
    public function store(Request $request)
    {
        // Validate the settings input
        $request->validate([
            'site_name' => 'required|string|max:255',
            'site_email' => 'required|email',
            'maintenance_mode' => 'required|boolean',
        ]);

        // Store or update settings
        $settings = [
            'site_name' => $request->input('site_name'),
            'site_email' => $request->input('site_email'),
            'maintenance_mode' => $request->input('maintenance_mode'),
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return redirect()->route('admin.settings.index')->with('success', 'Settings updated successfully.');
    }
}
