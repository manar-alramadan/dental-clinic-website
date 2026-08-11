<?php

namespace App\Http\Controllers;

use App\Models\DentalCase;
use App\Models\GalleryImage;

class DentalCaseController extends Controller
{
    public function index()
    {
        // جلب حالات قبل وبعد المنشورة
        $cases = DentalCase::where('is_published', true)
            ->latest()
            ->get();

        // جلب صور معرض النتائج المنشورة
        $images = GalleryImage::where('is_published', true)
            ->latest()
            ->get();

        // إرسال الحالات والصور إلى الصفحة نفسها
        return view('before-after', compact('cases', 'images'));
    }
}
