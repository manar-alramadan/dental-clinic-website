@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-slate-950 text-white">


{{-- ================= NAVBAR ================= --}}
<header class="border-b border-white/10 bg-slate-950/80 backdrop-blur-xl">
    <nav class="mx-auto flex max-w-7xl  justify-between px-6 py-5">
<a href="/" class="flex items-center gap-3">

                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-white shadow-lg">
                    <span class="">
                        <img  src="{{ asset('images/teethlogo3.jpg') }}"
                              alt="د. راما محمد الرمضان"
                                class="rounded-full  h-10 w-10 object-cover"    >

                        </span>
                </div>

                <div class="leading-tight">
                    <div class="text-lg font-black text-white">
                         الدكتورة راما محمد الرمضان
                    </div>

                    <div class="text-xs text-cyan-100">
                        طب وتجميل الأسنان
                    </div>
                </div>

            </a>
        <a
            href="{{ route('home') }}"
            class="rounded-full border border-white/10 bg-white/5 px-5 py-2.5 text-sm font-bold text-slate-200 transition hover:bg-white/10"
        >
            العودة للرئيسية
        </a>

    </nav>
</header>


{{-- ================= PAGE HERO ================= --}}
<section class="relative overflow-hidden px-6 py-24">

    {{-- Background glow --}}
    <div class="pointer-events-none absolute -right-40 -top-40 h-96 w-96 rounded-full bg-cyan-500/10 blur-3xl"></div>

    <div class="pointer-events-none absolute -left-40 top-40 h-96 w-96 rounded-full bg-blue-500/10 blur-3xl"></div>

    <div class="relative mx-auto max-w-4xl text-center">

        <span class="font-bold text-cyan-300">
            نتائج تهمك
        </span>

        <h1 class="mt-4 text-4xl font-black leading-tight md:text-6xl">
            قبل وبعد
            <span class="text-cyan-400">
                ابتسامتك
            </span>
        </h1>

        <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-slate-300">
            شاهدي بعض نتائج الحالات والتغييرات التي يمكن تحقيقها
            من خلال العناية المناسبة بالأسنان والتقنيات الحديثة.
        </p>

    </div>

</section>


{{-- ================= BEFORE & AFTER ================= --}}
<section class="px-6 pb-24">

    <div class="mx-auto max-w-6xl">

        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-3">


            {{-- ================= CASE 1 ================= --}}
            <article
                class="group overflow-hidden rounded-3xl border border-white/10 bg-white/5 shadow-2xl backdrop-blur-xl transition duration-300 hover:-translate-y-2 hover:border-cyan-400/30"
            >

                {{-- BEFORE --}}
                <div class="relative overflow-hidden">

                    <img
                        src="{{ asset('images/te11.jpg') }}"
                        alt="قبل العلاج"
class="h-52 w-full object-cover transition duration-500 group-hover:scale-105"                    >

                    <span
                        class="absolute right-4 top-4 rounded-full bg-slate-950/90 px-4 py-2 text-xs font-bold text-white backdrop-blur"
                    >
                        قبل
                    </span>

                </div>


                {{-- Divider --}}
                <div class="flex items-center gap-3 bg-slate-900/80 px-5 py-3">

                    <div class="h-px flex-1 bg-white/10"></div>

                    <span class="text-xs font-bold text-cyan-300">
                        النتيجة
                    </span>

                    <div class="h-px flex-1 bg-white/10"></div>

                </div>


                {{-- AFTER --}}
                <div class="relative overflow-hidden">

                    <img
                        src="{{ asset('images/te12.jpg') }}"
                        alt="بعد العلاج"
class="h-52 w-full object-cover transition duration-500 group-hover:scale-105"                    >

                    <span
                        class="absolute right-4 top-4 rounded-full bg-cyan-500 px-4 py-2 text-xs font-bold text-white"
                    >
                        بعد
                    </span>

                </div>


                <div class="p-6">

                    <h2 class="text-xl font-black">
                        تحسين مظهر الابتسامة
                    </h2>

                    <p class="mt-3 text-sm leading-7 text-slate-400">
                        نتيجة توضح الفرق في مظهر الأسنان والابتسامة
                        بعد الحصول على العناية المناسبة.
                    </p>

                </div>

            </article>



            {{-- ================= CASE 2 ================= --}}
            <article
                class="group overflow-hidden rounded-3xl border border-white/10 bg-white/5 shadow-2xl backdrop-blur-xl transition duration-300 hover:-translate-y-2 hover:border-cyan-400/30"
            >

                {{-- BEFORE --}}
                <div class="relative overflow-hidden">

                    <img
                        src="{{ asset('images/te21.jpg') }}"
                        alt="قبل العلاج"
class="h-52 w-full object-cover transition duration-500 group-hover:scale-105"                    >

                    <span
                        class="absolute right-4 top-4 rounded-full bg-slate-950/90 px-4 py-2 text-xs font-bold text-white backdrop-blur"
                    >
                        قبل
                    </span>

                </div>


                {{-- Divider --}}
                <div class="flex items-center gap-3 bg-slate-900/80 px-5 py-3">

                    <div class="h-px flex-1 bg-white/10"></div>

                    <span class="text-xs font-bold text-cyan-300">
                        النتيجة
                    </span>

                    <div class="h-px flex-1 bg-white/10"></div>

                </div>


                {{-- AFTER --}}
                <div class="relative overflow-hidden">

                    <img
                        src="{{ asset('images/te22.jpg') }}"
                        alt="بعد العلاج"
class="h-52 w-full object-cover transition duration-500 group-hover:scale-105"                    >

                    <span
                        class="absolute right-4 top-4 rounded-full bg-cyan-500 px-4 py-2 text-xs font-bold text-white"
                    >
                        بعد
                    </span>

                </div>


                <div class="p-6">

                    <h2 class="text-xl font-black">
                        ابتسامة أكثر إشراقًا
                    </h2>

                    <p class="mt-3 text-sm leading-7 text-slate-400">
                        مقارنة بصرية توضح التغيير في لون وشكل الأسنان
                        وتحسين مظهر الابتسامة.
                    </p>

                </div>

            </article>



            {{-- ================= CASE 3 ================= --}}
            <article
                class="group overflow-hidden rounded-3xl border border-white/10 bg-white/5 shadow-2xl backdrop-blur-xl transition duration-300 hover:-translate-y-2 hover:border-cyan-400/30"
            >

                {{-- BEFORE --}}
                <div class="relative overflow-hidden">

                    <img
                        src="{{ asset('images/te31.jpg') }}"
                        alt="قبل العلاج"
class="h-52 w-full object-cover transition duration-500 group-hover:scale-105"                    >

                    <span
                        class="absolute right-4 top-4 rounded-full bg-slate-950/90 px-4 py-2 text-xs font-bold text-white backdrop-blur"
                    >
                        قبل
                    </span>

                </div>


                {{-- Divider --}}
                <div class="flex items-center gap-3 bg-slate-900/80 px-5 py-3">

                    <div class="h-px flex-1 bg-white/10"></div>

                    <span class="text-xs font-bold text-cyan-300">
                        النتيجة
                    </span>

                    <div class="h-px flex-1 bg-white/10"></div>

                </div>


                {{-- AFTER --}}
                <div class="relative overflow-hidden">

                    <img
                        src="{{ asset('images/te32.jpg') }}"
                        alt="بعد العلاج"
class="h-52 w-full object-cover transition duration-500 group-hover:scale-105"                    >

                    <span
                        class="absolute right-4 top-4 rounded-full bg-cyan-500 px-4 py-2 text-xs font-bold text-white"
                    >
                        بعد
                    </span>

                </div>


                <div class="p-6">

                    <h2 class="text-xl font-black">
                        تحسين شكل الأسنان
                    </h2>

                    <p class="mt-3 text-sm leading-7 text-slate-400">
                        مثال على تحسين تناسق الأسنان ومظهر الابتسامة
                        باستخدام الإجراءات المناسبة للحالة.
                    </p>

                </div>

            </article>

        </div>

    </div>

</section>

{{-- ================= PATIENT RESULTS GALLERY ================= --}}
<section class="px-6 pb-24">

    <div class="mx-auto max-w-7xl">

        {{-- Section Header --}}
        <div class="mx-auto max-w-2xl text-center">

            <span class="font-bold text-cyan-300">
                معرض النتائج
            </span>

            <h2 class="mt-3 text-4xl font-black text-white md:text-5xl">
                نتائج مرضانا
            </h2>

            <p class="mt-5 text-lg leading-8 text-slate-400">
                مجموعة من الحالات والنتائج التي تم تنفيذها
                بعناية داخل العيادة.
            </p>

        </div>


        {{-- Gallery --}}
        <div class="mt-14 grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4">

            @forelse($images as $image)

                <button
                    type="button"
                    onclick="openGallery({{ $loop->index }})"
                    class="group relative aspect-square overflow-hidden rounded-3xl border border-white/10 bg-white/5"
                >

                    <img
                        src="{{ asset('storage/' . $image->image) }}"
                        alt="{{ $image->title ?? 'نتيجة من نتائج المرضى' }}"
                        class="h-full w-full object-cover transition duration-500 group-hover:scale-110"
                    >

                    <div
                        class="absolute inset-0 flex items-center justify-center bg-slate-950/0 transition duration-300 group-hover:bg-slate-950/40"
                    >

                        <span
                            class="scale-75 rounded-full bg-white/90 px-5 py-3 text-sm font-bold text-slate-900 opacity-0 transition duration-300 group-hover:scale-100 group-hover:opacity-100"
                        >
                            عرض الصورة
                        </span>

                    </div>

                </button>

            @empty

                <div class="col-span-full py-16 text-center">

                    <p class="text-slate-400">
                        لا توجد نتائج منشورة حاليًا.
                    </p>

                </div>

            @endforelse

        </div>

    </div>

</section>


{{-- ================= GALLERY LIGHTBOX ================= --}}
<div
    id="gallery-lightbox"
    class="fixed inset-0 z-50 hidden items-center justify-center bg-black/90 px-6 py-10 backdrop-blur-sm"
    onclick="closeGallery(event)"
>

    {{-- Close Button --}}
    <button
        type="button"
        onclick="closeGallery(event)"
        class="absolute right-6 top-6 z-30 flex h-12 w-12 items-center justify-center rounded-full bg-white/10 text-2xl text-white transition hover:bg-white/20"
        aria-label="إغلاق"
    >
        ×
    </button>


    {{-- Previous Button --}}
    <button
        type="button"
        onclick="previousImage(event)"
        class="absolute left-4 top-1/2 z-30 flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full bg-white/10 text-3xl text-white backdrop-blur transition hover:bg-cyan-500 sm:left-8"
        aria-label="الصورة السابقة"
    >
        ‹
    </button>


    {{-- Image Container --}}
    <div
        class="relative flex max-h-[85vh] max-w-[90vw] items-center justify-center"
        onclick="event.stopPropagation()"
    >

        <img
            id="gallery-preview"
            src=""
            alt="صورة من نتائج المرضى"
            class="max-h-[85vh] max-w-[90vw] rounded-2xl object-contain shadow-2xl"
        >

    </div>


    {{-- Next Button --}}
    <button
        type="button"
        onclick="nextImage(event)"
        class="absolute right-4 top-1/2 z-30 flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full bg-white/10 text-3xl text-white backdrop-blur transition hover:bg-cyan-500 sm:right-8"
        aria-label="الصورة التالية"
    >
        ›
    </button>

</div>


<script>

    /*
    |--------------------------------------------------------------------------
    | Gallery Images From Database
    |--------------------------------------------------------------------------
    */

    const galleryImages = @json(
        $images->map(function ($image) {
            return [
                'src' => asset('storage/' . $image->image),
                'title' => $image->title,
            ];
        })->values()
    );


    /*
    |--------------------------------------------------------------------------
    | Current Image
    |--------------------------------------------------------------------------
    */

    let currentImageIndex = 0;


    /*
    |--------------------------------------------------------------------------
    | Open Gallery
    |--------------------------------------------------------------------------
    */

    function openGallery(index) {

        const lightbox = document.getElementById('gallery-lightbox');

        if (!galleryImages.length) {
            return;
        }

        currentImageIndex = index;

        updateGalleryImage();

        lightbox.classList.remove('hidden');
        lightbox.classList.add('flex');

        document.body.classList.add('overflow-hidden');
    }


    /*
    |--------------------------------------------------------------------------
    | Update Current Image
    |--------------------------------------------------------------------------
    */

    function updateGalleryImage() {

        const preview = document.getElementById('gallery-preview');

        const currentImage = galleryImages[currentImageIndex];

        if (!currentImage) {
            return;
        }

        preview.src = currentImage.src;

        preview.alt =
            currentImage.title ||
            'صورة من نتائج المرضى';
    }


    /*
    |--------------------------------------------------------------------------
    | Next Image
    |--------------------------------------------------------------------------
    */

    function nextImage(event) {

        if (event) {
            event.stopPropagation();
        }

        if (!galleryImages.length) {
            return;
        }

        currentImageIndex++;

        if (currentImageIndex >= galleryImages.length) {
            currentImageIndex = 0;
        }

        updateGalleryImage();
    }


    /*
    |--------------------------------------------------------------------------
    | Previous Image
    |--------------------------------------------------------------------------
    */

    function previousImage(event) {

        if (event) {
            event.stopPropagation();
        }

        if (!galleryImages.length) {
            return;
        }

        currentImageIndex--;

        if (currentImageIndex < 0) {
            currentImageIndex = galleryImages.length - 1;
        }

        updateGalleryImage();
    }


    /*
    |--------------------------------------------------------------------------
    | Close Gallery
    |--------------------------------------------------------------------------
    */

    function closeGallery(event) {

        if (event) {
            event.stopPropagation();
        }

        const lightbox = document.getElementById('gallery-lightbox');

        lightbox.classList.add('hidden');
        lightbox.classList.remove('flex');

        document.body.classList.remove('overflow-hidden');
    }


    /*
    |--------------------------------------------------------------------------
    | Keyboard Navigation
    |--------------------------------------------------------------------------
    */

    document.addEventListener('keydown', function(event) {

        const lightbox =
            document.getElementById('gallery-lightbox');

        if (lightbox.classList.contains('hidden')) {
            return;
        }


        // Escape
        if (event.key === 'Escape') {

            closeGallery();

        }


        // Right Arrow
        else if (event.key === 'ArrowRight') {

            nextImage(event);

        }


        // Left Arrow
        else if (event.key === 'ArrowLeft') {

            previousImage(event);

        }

    });

</script>


{{-- ================= CTA ================= --}}
<section class="px-6 pb-24">

    <div
        class="mx-auto max-w-5xl overflow-hidden rounded-[2rem] border border-cyan-400/20 bg-gradient-to-br from-cyan-500/15 to-blue-500/10 p-10 text-center shadow-2xl md:p-16"
    >

        <span class="text-sm font-bold text-cyan-300">
            ابتسامتك تستحق الاهتمام
        </span>

        <h2 class="mt-4 text-3xl font-black md:text-4xl">
            جاهزة لبدء رحلتك؟
        </h2>

        <p class="mx-auto mt-5 max-w-2xl leading-8 text-slate-300">
            احجز موعدك مع د. راما محمد الرمضان
            واحصلي على الاستشارة المناسبة لاحتياجاتك.
        </p>
        <a
            href="{{ route('appointments.create') }}"
            class="mt-8 inline-flex rounded-full bg-cyan-500 px-8 py-4 font-bold text-white transition hover:bg-cyan-400"
        >
            احجز موعدك
        </a>

    </div>

</section>



{{-- ================= FOOTER ================= --}}
<footer class="border-t border-white/10 px-6 py-8">

    <div
        class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-3 text-sm text-slate-500 md:flex-row"
    >

        <span>
            د. راما محمد الرمضان
        </span>

        <span>
            © {{ date('Y') }} جميع الحقوق محفوظة
        </span>

    </div>

</footer>


</div>

@endsection
