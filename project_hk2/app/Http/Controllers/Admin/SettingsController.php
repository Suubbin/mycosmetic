<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingsController extends Controller
{
    protected $settingsFile;

    public function __construct()
    {
        $this->settingsFile = storage_path('app/settings.json');
    }

    public function edit()
    {
        $settings = [];

        if (File::exists($this->settingsFile)) {
            $settings = json_decode(File::get($this->settingsFile), true);
        }

        return view('admin.settings', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'store_name' => 'required|string|max:255',
            'contact_email' => 'required|email',
            'contact_phone' => 'required|string|max:20',
            'address' => 'required|string',
        ]);

        File::put($this->settingsFile, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        return redirect()->route('admin.settings')->with('success', 'Cập nhật cài đặt thành công!');
    }
}

