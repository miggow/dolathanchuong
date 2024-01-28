<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CheckoutController extends Controller
{
    public function getDistricts(Request $request)
    {
        $url = "https://vnprovinces.pythonanywhere.com/api/districts/?province_id=$request->cityID&basic=true&limit=100";
        $districtRequest = Http::withOptions(['verify' => false])->get($url);
        $districts = $districtRequest->json();
        return response()->json($districts);
    }

    public function getWards(Request $request)
    {
        $url = "https://vnprovinces.pythonanywhere.com/api/wards/?district_id=$request->districtID&basic=true&limit=100";
        $wardRequest = Http::withOptions(['verify' => false])->get($url);
        $wards = $wardRequest->json();
        return response()->json($wards);
    }
}
