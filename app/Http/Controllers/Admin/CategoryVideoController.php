<?php

namespace App\Http\Controllers\Admin;

use App\CategoryVideo;
use App\Http\Controllers\Controller;
use App\InstagramFeed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class CategoryVideoController extends Controller
{
    public function index()
    {
        $categoryVideos = CategoryVideo::all();
        return view('admin.setting.category_video.index', compact('categoryVideos'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'order' => ['required'],
                'image_icon' => ['required'],
                'video' => ['required'],
                'title' => ['required'],
            ]);
            $imagePath = $videoPath = "";
            if ($request->image_icon) {
                $imagePath = save_image('public/category_icon', $request->image_icon);
            }
            if ($request->video) {
                $videoPath = save_image('public/category_video', $request->video);
            }
            $categoryVideo = new CategoryVideo();
            $categoryVideo->fill(['image_icon' => $imagePath, 'video' => $videoPath, 'title' => $request->title, 'order' => $request->order]);
            $categoryVideo->save();
            Artisan::call('cache:clear');
            return redirect()->back();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $categoryVideo = CategoryVideo::find(decrypt($id));
            if (File::exists($categoryVideo->image_icon)) {
                File::delete($categoryVideo->image_icon);
            }
            if (File::exists($categoryVideo->video)) {
                File::delete($categoryVideo->video);
            }
            $imagePath = save_image('public/category_image', $request->image_icon);
            $videoPath = save_image('public/category_video', $request->video);
            $categoryVideo->fill(['image_icon' => $imagePath, 'video' => $videoPath, 'title' => $request->title, 'order' => $request->order]);
            $categoryVideo->save();
            Artisan::call('cache:clear');
            return redirect()->back();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function destroy($id)
    {
        $categoryVideo = CategoryVideo::find(decrypt($id));
        if (File::exists($categoryVideo->image_icon)) {
            File::delete($categoryVideo->image_icon);
        }
        if (File::exists($categoryVideo->video)) {
            File::delete($categoryVideo->video);
        }
        $categoryVideo->delete();
        Artisan::call('cache:clear');
        return redirect()->back();
    }
}
