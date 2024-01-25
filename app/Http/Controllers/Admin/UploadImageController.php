<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {

            $name = save_image('uploads/editor', $request->file('upload'));
            $url = asset('/') . $name;
            return response()->json(['fileName' => $name, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
