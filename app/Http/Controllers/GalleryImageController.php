<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryImageController extends Controller
{
    public function index()
    {
        $images = GalleryImage::latest()->get();

        return view('admin.gallery.index', compact('images'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'images' => 'required|array|min:1',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        foreach ($request->file('images') as $image) {

            $imagePath = $image->store('gallery', 'public');

            GalleryImage::create([
                'image' => $imagePath,
                'is_published' => true,
            ]);
        }

        $count = count($request->file('images'));

        return redirect()
            ->route('admin.gallery.index')
            ->with(
                'success',
                "تمت إضافة {$count} صورة بنجاح."
            );
    }

    public function destroy(GalleryImage $galleryImage)
    {
        if ($galleryImage->image) {
            Storage::disk('public')->delete($galleryImage->image);
        }

        $galleryImage->delete();

        return redirect()
            ->route('admin.gallery.index')
            ->with('success', 'تم حذف الصورة بنجاح.');
    }
}

