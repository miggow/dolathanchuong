<?php

use App\Models\Cart;
use App\Models\SettingHomepage;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

if (!function_exists('areActiveRoutes')) {
    function areActiveRoutes(array $routes, $output = "active expand show")
    {
        foreach ($routes as $route) {
            if (Route::currentRouteName() == $route && (url()->current() != url('/admin/website/custom-pages/edit/home'))) return $output;
        }
    }
}
if (!function_exists('areActiveRouteHome')) {
    function areActiveRouteHome()
    {
        if (Route::currentRouteName() == 'home')
            return true;
        return false;
    }
}
//Save image
if (!function_exists('save_image')) {
    function save_image($folder, $image)
    {
        $name = date('dmYHis') . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
        $path = $folder . '/';
        $image->move(public_path($path), $name);

        return $folder . '/' . $name;
    }
}
