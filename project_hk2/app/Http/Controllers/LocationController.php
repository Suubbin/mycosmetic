<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Ward;


class LocationController extends Controller
{
   public function getDistricts(Request $request)
    {
        $provinceCode = $request->province_code; // key từ AJAX hoặc form
        $districts = District::where('province_code', $provinceCode)->get();
        return response()->json($districts);
    }

    public function getWards(Request $request)
    {
        // Lấy mã huyện từ request
        $districtCode = $request->district_code; // key từ AJAX hoặc form
        $wards = Ward::where('district_code', $districtCode)->get();
        return response()->json($wards);
    }
}
