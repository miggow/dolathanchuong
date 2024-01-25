<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\InstagramFeed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class InstagramFeedController extends Controller
{
    public function index()
    {
        $instagramFeeds = InstagramFeed::all();
        return view('admin.setting.instagram_feed.index', compact('instagramFeeds'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'instagram_feed' => ['required'],
        ]);
        $path = "";
        if ($request->instagram_feed) {
            $image = $request->instagram_feed;
            $path = save_image('public/instagram_feeds', $image);
        }
        $instagramFeed = new InstagramFeed();
        $instagramFeed->fill(['image' => $path, 'link' => $request->link]);
        $instagramFeed->save();
        Artisan::call('cache:clear');
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $instagramFeed = InstagramFeed::find(decrypt($id));

        $image_path = $instagramFeed->image;  // Value is not URL but directory file path
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        if ($request->instagram_feed) {
            $image = $request->instagram_feed;
            $path = save_image('public/instagram_feeds', $image);
        }
        $instagramFeed->fill(['image' => $path, 'link' => $request->link]);
        $instagramFeed->save();
        Artisan::call('cache:clear');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $instagramFeed = InstagramFeed::find(decrypt($id));
        $image_path = $instagramFeed->image;  // Value is not URL but directory file path
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $instagramFeed->delete();
        Artisan::call('cache:clear');
        return redirect()->back();
    }
}
