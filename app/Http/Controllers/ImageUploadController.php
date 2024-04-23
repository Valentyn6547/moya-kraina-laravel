<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function uploadImg(Request $request) {
        $request->validate([
            'image' => 'required|image|max:2048',  // 2MB Max
        ]);

        $path = $request->file('image')->store('images', 'public');

        $image = new Image;
        $image->filename = $request->file('image')->getClientOriginalName();
        $image->path = $path;
        $image->save();

        return back()->with('success', 'Image uploaded successfully')->with('path', $path);
    }
}
