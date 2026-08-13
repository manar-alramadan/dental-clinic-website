@extends('layouts.app')

@section('content')

<div class="mx-auto max-w-7xl">

    {{-- Header --}}
    <div class="mb-10 flex flex-col justify-between gap-5 md:flex-row md:items-center">

        <div>
            <span class="font-bold text-cyan-300">
                لوحة التحكم
            </span>

            <h1 class="mt-2 text-4xl font-black">
                معرض نتائج المرضى
            </h1>

            <p class="mt-3 text-slate-400">
                إدارة الصور الموجودة في معرض نتائج المرضى.
            </p>
        </div>

        <div class="flex flex-col gap-3 sm:flex-row">

            {{-- Add Image --}}
            <a
                href="{{ route('admin.gallery.create') }}"
                class="inline-flex items-center justify-center rounded-2xl bg-cyan-500 px-6 py-3 font-bold text-white transition hover:bg-cyan-400"
            >
                + إضافة صورة جديدة
            </a>

            {{-- Logout --}}
            <form
                action="{{ route('admin.logout') }}"
                method="POST"
            >
                @csrf

                <button
                    type="submit"
                    class="rounded-xl bg-red-400/50 px-5 py-3 font-bold text-red-400 transition hover:bg-red-500 hover:text-white"
                >
                    تسجيل الخروج
                </button>
            </form>
          <a
              href="{{ route('before-after') }}"
              class="rounded-xl bg-red-400/50 px-5 py-3 font-bold text-red-400 transition hover:bg-red-500 hover:text-white"
          >
              العودة لمعرض الصور
          </a>


        </div>

    </div>


    {{-- Success Message --}}
    @if(session('success'))

        <div class="mb-8 rounded-2xl border border-green-400/20 bg-green-500/10 px-5 py-4 text-green-300">
            {{ session('success') }}
        </div>

    @endif


    {{-- Error Message --}}
    @if(session('error'))

        <div class="mb-8 rounded-2xl border border-red-400/20 bg-red-500/10 px-5 py-4 text-red-300">
            {{ session('error') }}
        </div>

    @endif


    {{-- Images --}}
    @if($images->count() > 0)

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

            @foreach($images as $image)

                @php

                    /*
                     * Cloudinary image
                     *
                     * New images uploaded to Cloudinary
                     * contain a full https:// URL.
                     */
                    if (
                        !empty($image->image) &&
                        (
                            str_starts_with($image->image, 'http://') ||
                            str_starts_with($image->image, 'https://')
                        )
                    ) {
                        $imageUrl = $image->image;
                    }

                    /*
                     * Existing images stored directly
                     * inside public/images
                     */
                    elseif (
                        !empty($image->image) &&
                        str_starts_with($image->image, 'images/')
                    ) {
                        $imageUrl = asset($image->image);
                    }

                    /*
                     * Existing Laravel storage images
                     *
                     * Example:
                     * gallery/example.jpg
                     */
                    else {
                        $imageUrl = asset('storage/' . ltrim($image->image ?? '', '/'));
                    }

                @endphp


                <article class="overflow-hidden rounded-3xl border border-white/10 bg-white/5 shadow-xl">

                    {{-- Image --}}
                  <div class="aspect-square overflow-hidden bg-slate-900">

                      @php
                          $imageUrl = $image->image;

                          if (
                              str_starts_with($imageUrl, 'http://') ||
                              str_starts_with($imageUrl, 'https://')
                          ) {
                              $imageUrl = $image->image;
                          } elseif (str_starts_with($imageUrl, 'images/')) {
                              $imageUrl = asset($image->image);
                          } else {
                              $imageUrl = asset('storage/' . ltrim($image->image, '/'));
                          }
                      @endphp

                      <img
                          src="{{ $imageUrl }}"
                          alt="{{ $image->title ?? 'نتيجة من نتائج المرضى' }}"
                          class="h-full w-full object-cover transition duration-500 hover:scale-105"
                          loading="lazy"
                      >

                  </div>

                    {{-- Information --}}
                    <div class="p-5">

                        @if($image->title)

                            <h2 class="text-lg font-bold text-white">
                                {{ $image->title }}
                            </h2>

                        @endif


                        @if($image->description)

                            <p class="mt-2 text-sm leading-6 text-slate-400">
                                {{ $image->description }}
                            </p>

                        @endif


                        {{-- Status --}}
                        <div class="mt-4">

                            @if($image->is_published)

                                <span class="rounded-full bg-green-500/10 px-3 py-1 text-xs font-bold text-green-300">
                                    منشورة
                                </span>

                            @else

                                <span class="rounded-full bg-yellow-500/10 px-3 py-1 text-xs font-bold text-yellow-300">
                                    غير منشورة
                                </span>

                            @endif

                        </div>


                        {{-- Delete --}}
                        <form
                            action="{{ route('admin.gallery.destroy', $image) }}"
                            method="POST"
                            class="mt-5"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="w-full rounded-xl border border-red-400/20 bg-red-500/10 px-4 py-3 text-sm font-bold text-red-300 transition hover:bg-red-500 hover:text-white"
                            >
                                حذف الصورة
                            </button>

                        </form>

                    </div>

                </article>

            @endforeach

        </div>

    @else

        {{-- Empty State --}}
        <div class="rounded-3xl border border-white/10 bg-white/5 px-6 py-20 text-center">

            <div class="text-5xl">
                🖼️
            </div>

            <h2 class="mt-5 text-2xl font-black">
                لا توجد صور حاليًا
            </h2>

            <p class="mt-3 text-slate-400">
                ابدئي بإضافة أول صورة إلى معرض نتائج المرضى.
            </p>

            <a
                href="{{ route('admin.gallery.create') }}"
                class="mt-7 inline-flex rounded-2xl bg-cyan-500 px-6 py-3 font-bold text-white transition hover:bg-cyan-400"
            >
                إضافة أول صورة
            </a>

        </div>

    @endif

</div>

@endsection
