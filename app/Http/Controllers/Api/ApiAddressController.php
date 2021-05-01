<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\District;
use App\Models\Ward;

class ApiAddressController extends Controller
{
    public function getProvince()
    {
        $province = Province::get();
        return response()->json($province);
    }

    public function getDistrict(Request $request)
    {
        $district = District::where('province_id',$request->province_id)->get();
        return response()->json($district);    
    }

    public function getWard(Request $request)
    {
        $ward = Ward::where('district_id',$request->district_id)->get();
        return response()->json($ward);
    }
}
