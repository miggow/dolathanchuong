<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeSiteSettingController extends Controller
{
    public function banner()
    {
        return view('admin.setting.home.index');
    }
    public function banner_store(Request $request)
    {
        return view('admin.setting.home.index');
    }

}
