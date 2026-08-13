<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use Cloudinary\Api\Upload\UploadApi;
use Illuminate\Http\Request;

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
            'images' => [
                'required',
                'array',
                'min:1',
            ],

            'images.*' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:5120',
            ],
        ]);

        $count = 0;

        foreach ($request->file('images') as $image) {

            $upload = (new UploadApi())->upload(
                $image->getRealPath(),
                [
                    'folder' => 'dental-clinic/gallery',
                    'resource_type' => 'image',
                ]
            );

            GalleryImage::create([
                'image' => $upload['secure_url'],
                'cloudinary_public_id' => $upload['public_id'],
                'is_published' => true,
            ]);

            $count++;
        }

        return redirect()
            ->route('admin.gallery.index')
            ->with(
                'success',
                "تمت إضافة {$count} صورة بنجاح."
            );
    }

    public function destroy(GalleryImage $galleryImage)
    {
        /*
         * الصور الجديدة الموجودة في Cloudinary
         */
        if ($galleryImage->cloudinary_public_id) {

            try {

                (new UploadApi())->destroy(
                    $galleryImage->cloudinary_public_id,
                    [
                        'resource_type' => 'image',
                        'type' => 'upload',
                        'invalidate' => true,
                    ]
                );

            } catch (\Throwable $e) {

                report($e);
            }
        }

        /*
         * الصور القديمة المحلية
         *
         * إذا لم يكن لها cloudinary_public_id
         * فهي صورة قديمة مخزنة في storage.
         *
         * لا نحاول حذفها من Cloudinary.
         */

        $galleryImage->delete();

        return redirect()
            ->route('admin.gallery.index')
            ->with(
                'success',
                'تم حذف الصورة بنجاح.'
            );
    }
}
