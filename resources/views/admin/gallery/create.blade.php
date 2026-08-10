@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-slate-950 px-6 py-12 text-white">

    <div class="mx-auto max-w-3xl">

        {{-- Header --}}
        <div class="mb-10">

            <a
                href="{{ route('admin.gallery.index') }}"
                class="text-sm font-bold text-cyan-300 transition hover:text-cyan-200"
            >
                ← العودة إلى معرض الصور
            </a>

            <span class="mt-8 block font-bold text-cyan-300">
                لوحة التحكم
            </span>

            <h1 class="mt-2 text-4xl font-black">
                إضافة صور جديدة
            </h1>

            <p class="mt-3 text-slate-400">
                يمكنك اختيار عدة صور وإضافتها إلى معرض نتائج المرضى دفعة واحدة.
            </p>

        </div>


        {{-- Validation Errors --}}
        @if($errors->any())

            <div class="mb-8 rounded-2xl border border-red-400/20 bg-red-500/10 p-5">

                <h2 class="font-bold text-red-300">
                    يرجى تصحيح الأخطاء التالية:
                </h2>

                <ul class="mt-3 list-inside list-disc text-sm text-red-200">

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        {{-- Form --}}
        <form
            action="{{ route('admin.gallery.store') }}"
            method="POST"
            enctype="multipart/form-data"
            class="space-y-7 rounded-3xl border border-white/10 bg-white/5 p-6 shadow-2xl backdrop-blur-xl md:p-8"
        >

            @csrf


            {{-- Images --}}
            <div>

                <label
                    for="images"
                    class="mb-3 block text-sm font-bold text-slate-200"
                >
                    صور النتائج
                </label>

                <input
                    id="images"
                    name="images[]"
                    type="file"
                    accept="image/jpeg,image/png,image/jpg,image/webp"
                    multiple
                    required
                    class="block w-full cursor-pointer rounded-2xl border border-white/10 bg-slate-900 p-3 text-sm text-slate-300 file:mr-4 file:rounded-xl file:border-0 file:bg-cyan-500 file:px-4 file:py-2 file:font-bold file:text-white hover:file:bg-cyan-400"
                >

                <p class="mt-2 text-xs text-slate-500">
                    يمكنك اختيار عدة صور معًا — JPG, JPEG, PNG, WEBP — الحد الأقصى لكل صورة 5MB.
                </p>

            </div>


            {{-- Preview --}}
            <div
                id="preview-container"
                class="hidden"
            >

                <div class="mb-4 flex items-center justify-between">

                    <h2 class="font-bold text-slate-200">
                        معاينة الصور
                    </h2>

                    <span
                        id="image-count"
                        class="rounded-full bg-cyan-500/10 px-3 py-1 text-xs font-bold text-cyan-300"
                    >
                        0 صور
                    </span>

                </div>

                <div
                    id="preview-grid"
                    class="grid grid-cols-2 gap-4 sm:grid-cols-3"
                ></div>

            </div>



            {{-- Buttons --}}
            <div class="flex flex-col gap-3 pt-3 sm:flex-row">

                <button
                    type="submit"
                    class="flex-1 rounded-2xl bg-cyan-500 px-6 py-4 font-black text-white transition hover:bg-cyan-400"
                >
                    إضافة الصور
                </button>

                <a
                    href="{{ route('admin.gallery.index') }}"
                    class="flex-1 rounded-2xl border border-white/10 bg-white/5 px-6 py-4 text-center font-bold text-slate-300 transition hover:bg-white/10"
                >
                    إلغاء
                </a>

            </div>

        </form>

    </div>

</div>


{{-- Image Preview Script --}}
<script>

    const imageInput = document.getElementById('images');
    const previewContainer = document.getElementById('preview-container');
    const previewGrid = document.getElementById('preview-grid');
    const imageCount = document.getElementById('image-count');

    imageInput.addEventListener('change', function () {

        previewGrid.innerHTML = '';

        const files = Array.from(this.files);

        if (files.length === 0) {

            previewContainer.classList.add('hidden');

            return;
        }

        previewContainer.classList.remove('hidden');

        imageCount.textContent =
            files.length + (files.length === 1 ? ' صورة' : ' صور');

        files.forEach(function (file) {

            if (!file.type.startsWith('image/')) {
                return;
            }

            const reader = new FileReader();

            reader.onload = function (event) {

                const wrapper = document.createElement('div');

                wrapper.className =
                    'group relative overflow-hidden rounded-2xl border border-white/10 bg-slate-900';

                wrapper.innerHTML = `
                    <img
                        src="${event.target.result}"
                        alt="معاينة الصورة"
                        class="h-40 w-full object-cover transition duration-300 group-hover:scale-105"
                    >

                    <div class="absolute inset-x-0 bottom-0 bg-black/60 px-3 py-2">
                        <p class="truncate text-xs text-white">
                            ${file.name}
                        </p>
                    </div>
                `;

                previewGrid.appendChild(wrapper);
            };

            reader.readAsDataURL(file);

        });

    });

</script>

@endsection
