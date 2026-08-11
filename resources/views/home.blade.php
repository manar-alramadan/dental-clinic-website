@extends('layouts.app')
@section('content')

<div class="min-h-screen bg-white">

    {{-- ================= NAVBAR ================= --}}
    <header class="absolute inset-x-0 top-0 z-50">

        <nav class="  fixed top-0 inset-x-0 z-50    bg-white/2 backdrop-blur-md  border-slate-200 shadow-sm transition-all mx-auto flex  items-center justify-between px-6 py-6">

            {{-- Logo --}}
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
                        د. راما محمد الرمضان
                    </div>

                    <div class="text-xs text-cyan-100">
                        طب وتجميل الأسنان
                    </div>
                </div>

            </a>

{{-- Desktop Navigation --}}
<div class="hidden items-center gap-8 lg:flex">

    <a href="#home"
       class="text-sm font-medium text-white transition hover:text-cyan-200">
        الرئيسية
    </a>

    <a href="#services"
       class="text-sm font-medium text-white transition hover:text-cyan-200">
        خدماتنا
    </a>

    <a href="#about"
       class="text-sm font-medium text-white transition hover:text-cyan-200">
        عن الطبيبة
    </a>

    <a
        href="{{ route('before-after') }}"
        class="inline-flex items-center rounded-full bg-cyan-500 px-7 py-3 font-bold text-white transition hover:bg-cyan-400"
    >
        نتائج الحالات
    </a>

    <a href="#testimonials"
       class="text-sm font-medium text-white transition hover:text-cyan-200">
        آراء المرضى
    </a>

    <a
        href="{{ route('admin.login') }}"
        class="inline-flex items-center rounded-full bg-cyan-500 px-7 py-3 font-bold text-white transition hover:bg-cyan-400"
    >
        Dr. Rama
    </a>

</div>
 {{-- Appointment --}}
            <a
                href="#appointment"
                class="rounded-full bg-white px-6 py-3 text-sm font-bold text-cyan-700 shadow-lg transition hover:-translate-y-0.5 hover:bg-cyan-50"
            >
                احجز موعدك
            </a>

{{-- Mobile Menu Button --}}
<button
    type="button"
    onclick="toggleMobileMenu()"
    class="flex h-11 w-11     items-center justify-center rounded-xl border border-white/10 bg-white  text-cyan-700  hover:-translate-y-0.5 hover:bg-cyan-50 lg:hidden"
    aria-label="فتح القائمة"
>
    <svg
        id="menu-icon"
        xmlns="http://www.w3.org/2000/svg"
        class="h-6 w-6"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        stroke-width="2"
    >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M4 6h16M4 12h16M4 18h16"
        />
    </svg>
</button>


{{-- Mobile Navigation --}}
<div
    id="mobile-menu"
    class="absolute left-4 right-4 top-full z-50 mt-3 hidden overflow-hidden rounded-2xl border border-white/10 bg-slate-950/95 p-4 shadow-2xl backdrop-blur-xl lg:hidden"
>

    <div class="flex flex-col gap-2">

        <a
            href="#home"
            onclick="closeMobileMenu()"
            class="rounded-xl px-4 py-3 text-sm font-medium text-white transition hover:bg-white/10 hover:text-cyan-200"
        >
            الرئيسية
        </a>

        <a
            href="#services"
            onclick="closeMobileMenu()"
            class="rounded-xl px-4 py-3 text-sm font-medium text-white transition hover:bg-white/10 hover:text-cyan-200"
        >
            خدماتنا
        </a>

        <a
            href="#about"
            onclick="closeMobileMenu()"
            class="rounded-xl px-4 py-3 text-sm font-medium text-white transition hover:bg-white/10 hover:text-cyan-200"
        >
            عن الطبيبة
        </a>

        <a
            href="{{ route('before-after') }}"
        class="inline-flex items-center rounded-full bg-cyan-500 px-7 py-3 font-bold text-white transition hover:bg-cyan-400"
        >
            نتائج الحالات
        </a>

        <a
            href="#testimonials"
            onclick="closeMobileMenu()"
            class="rounded-xl px-4 py-3 text-sm font-medium text-white transition hover:bg-white/10 hover:text-cyan-200"
        >
            آراء المرضى
        </a>

        <a
            href="{{ route('admin.login') }}"
        class="inline-flex items-center rounded-full bg-cyan-500 px-7 py-3 font-bold text-white transition hover:bg-cyan-400"
        >
            Dr. Rama
        </a>

    </div>

</div>


<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');

        menu.classList.toggle('hidden');
    }

    function closeMobileMenu() {
        const menu = document.getElementById('mobile-menu');

        menu.classList.add('hidden');
    }
</script>



        </nav>

    </header>



    {{-- ================= HERO ================= --}}
<section
    class="relative overflow-hidden bg-cover bg-center bg-no-repeat"
    style="background-image: url('{{ asset('images/hero3.jpg') }}');"
>

        {{-- Background --}}
        <div class="absolute inset-0">

            <div class="absolute inset-0 bg-gradient-to-l from-slate-950 via-slate-900/55 to-cyan-950"></div>

            <div class="absolute -left-40 top-1/4 h-[500px] w-[500px] rounded-full bg-cyan-500/10 blur-3xl"></div>

            <div class="absolute -right-40 bottom-0 h-[500px] w-[500px] rounded-full bg-blue-500/10 blur-3xl"></div>

        </div>


        {{-- Hero content --}}
        <div class="relative mx-auto w-full max-w-7xl px-6 pt-32">

            <div class="grid items-center gap-16 lg:grid-cols-2">


                {{-- Text --}}
                <div class="max-w-2xl">

                    {{-- Badge --}}
                   <div class="mb-7 inline-flex items-center gap-3 rounded-full border border-cyan-300/20 bg-white/10 px-5 py-2.5 backdrop-blur">

                       <span
                           class="h-2.5 w-2.5 rounded-full bg-cyan-300 shadow-[0_0_10px_rgba(103,232,249,0.6)] animate-pulse"
                       ></span>

                       <span class="text-sm font-medium text-cyan-100">
                           عيادة متخصصة في طب وتجميل الأسنان
                       </span>

                   </div>


                    {{-- Heading --}}
                    <h1 class="text-5xl font-black leading-[1.15] tracking-tight text-white md:text-6xl lg:text-7xl">

                        ابتسامتك        تبدأ من هنا



                    </h1>
                    <span class=" text-xl block text-cyan-300    font-black leading-[1.15] tracking-tight md:text-6xl lg:text-2xl  mt-[15px]">
                           اصنع ابتسامة مشرقة
                        </span>

                    {{-- Description --}}
                    <p class="mt-7 max-w-xl text-lg leading-9 text-slate-300 md:text-xl">

                        نساعدك على الحصول على ابتسامة صحية وجميلة
                        من خلال أحدث تقنيات طب وتجميل الأسنان،
                        في بيئة مريحة وعناية شخصية تناسبك.

                    </p>


                    {{-- Buttons --}}
                    <div class="mt-9 flex flex-wrap gap-4">

                        <a
                            href="#appointment"
                            class="rounded-full bg-cyan-500 px-8 py-4 font-bold text-white shadow-xl shadow-cyan-500/20 transition hover:-translate-y-1 hover:bg-cyan-400"
                        >
                            احجز موعدك
                        </a>

                        <a
                            href="#services"
                            class="rounded-full border border-white/20 bg-white/10 px-8 py-4 font-bold text-white backdrop-blur transition hover:bg-white/20"
                        >
                            اكتشف خدماتنا
                        </a>

                    </div>


                    {{-- Stats --}}
                    <div class="mt-12 grid max-w-xl grid-cols-3 border-t border-white/10 pt-8">

                        <div>
                            <div class="text-3xl font-black text-white">
                                +1000
                            </div>

                            <div class="mt-1 text-sm text-slate-400">
                                مريض
                            </div>
                        </div>


                        <div class="border-x border-white/10 px-6">

                            <div class="text-3xl font-black text-white">
                                +3
                            </div>

                            <div class="mt-1 text-sm text-slate-400">
                                سنوات خبرة
                            </div>

                        </div>


                        <div class="px-6">

                            <div class="text-3xl font-black text-white">
                                9.9
                            </div>

                            <div class="mt-1 text-sm text-slate-400">
                                ⭐ تقييم المرضى
                            </div>

                        </div>

                    </div>

                </div>



                {{-- Doctor Visual --}}
                <div class="relative hidden lg:block">

                    <div class="relative mx-auto h-[560px] w-[430px]">

                        {{-- Decorative circles --}}
                        <div class="absolute inset-8 rounded-full "></div>

                        <div class="absolute inset-16 rounded-full"></div>


                        {{-- Temporary Doctor Image Placeholder --}}
                        <div class="absolute inset-20 flex items-center justify-center   ">

                            <div class="text-center">

                                <div class="mx-auto flex   items-center  ">

                                    <span class="text-l    ">

                                    </span>

                                </div>


                            </div>

                        </div>





            </div>

        </div>

    </section>


{{-- ================= SERVICES ================= --}}
<section
    id="services"
    class="relative overflow-hidden bg-slate-900 px-6 py-24"
>

    {{-- Background Glow --}}
    <div class="pointer-events-none absolute -left-40 top-20 h-96 w-96 rounded-full bg-cyan-500/10 blur-3xl"></div>

    <div class="pointer-events-none absolute -right-40 bottom-10 h-96 w-96 rounded-full bg-blue-500/10 blur-3xl"></div>


    <div class="relative mx-auto max-w-7xl">


        {{-- Section Header --}}
        <div class="mx-auto max-w-3xl text-center">

                    <span class="inline-flex rounded-full border border-cyan-400/20 bg-cyan-400/10 px-4 py-2 text-sm font-bold text-cyan-300">
                        خدماتنا
                    </span>


            <h2 class="mt-3 text-4xl font-black text-white md:text-5xl">
                عناية متكاملة
                <span class="text-cyan-400"> ابتسامتك</span>
            </h2>

            <p class="mt-5 text-lg leading-8 text-slate-300">
                نقدم مجموعة متكاملة من خدمات طب وتجميل الأسنان
                بأحدث التقنيات وبعناية تناسب احتياجاتك.
            </p>

        </div>



        {{-- Services Grid --}}
        <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">


            {{-- Cleaning --}}
            <div
                class="group rounded-3xl border border-white/10 bg-white/[0.04] p-7 shadow-xl backdrop-blur-xl transition duration-300 hover:-translate-y-2 hover:border-cyan-400/30 hover:bg-white/[0.07]"
            >

                <div
                    class="flex h-14 w-14 items-center justify-center rounded-2xl bg-cyan-400/10 text-3xl transition duration-300 group-hover:bg-cyan-400/20"
                >

                                     <span class="">
                                         <img  src="{{ asset('images/teethlogo.jpg') }}"
                                               alt="د. راما محمد الرمضان"
                                                 class="rounded-full  h-15 w-15 object-cover"    >

                                         </span>
                </div>

                <h3 class="mt-6 text-xl font-black text-white">
                    تنظيف الأسنان
                </h3>

                <p class="mt-3 leading-7 text-slate-400">
                    تنظيف احترافي يساعد على إزالة التصبغات
                    والبلاك والحفاظ على صحة الأسنان واللثة.
                </p>

            </div>



            {{-- Whitening --}}
            <div
                class="group rounded-3xl border border-white/10 bg-white/[0.04] p-7 shadow-xl backdrop-blur-xl transition duration-300 hover:-translate-y-2 hover:border-cyan-400/30 hover:bg-white/[0.07]"
            >

                <div
                    class="flex h-14 w-14 items-center justify-center rounded-2xl bg-cyan-400/10 text-3xl transition duration-300 group-hover:bg-cyan-400/20"
                >

                                     <span class="">
                                         <img  src="{{ asset('images/teeeth.jpg') }}"
                                               alt="د. راما محمد الرمضان"
                                                 class="rounded-full  h-15 w-15 object-cover"    >

                                         </span>
                </div>

                <h3 class="mt-6 text-xl font-black text-white">
                    تبييض الأسنان
                </h3>

                <p class="mt-3 leading-7 text-slate-400">
                    ابتسامة أكثر إشراقًا من خلال تقنيات
                    تبييض الأسنان المناسبة لحالتك.
                </p>

            </div>



            {{-- Hollywood Smile --}}
            <div
                class="group rounded-3xl border border-white/10 bg-white/[0.04] p-7 shadow-xl backdrop-blur-xl transition duration-300 hover:-translate-y-2 hover:border-cyan-400/30 hover:bg-white/[0.07]"
            >

                <div
                    class="flex h-14 w-14 items-center justify-center rounded-2xl bg-cyan-400/10 text-3xl transition duration-300 group-hover:bg-cyan-400/20"
                >
                                        <span class="">
                                            <img  src="{{ asset('images/teethsmile.jpg') }}"
                                                alt="د. راما محمد الرمضان"
                                                    class="rounded-full  h-15 w-15 object-cover"    >

                                            </span>
                </div>

                <h3 class="mt-6 text-xl font-black text-white">
                   ابتسامة هوليود
                </h3>

                <p class="mt-3 leading-7 text-slate-400">
                    تصميم ابتسامة متناسقة وطبيعية تناسب
                    ملامح الوجه وشكل الأسنان.
                </p>

            </div>



            {{-- Root Canal --}}
            <div
                class="group rounded-3xl border border-white/10 bg-white/[0.04] p-7 shadow-xl backdrop-blur-xl transition duration-300 hover:-translate-y-2 hover:border-cyan-400/30 hover:bg-white/[0.07]"
            >

                <div
                    class="flex h-14 w-14 items-center justify-center rounded-2xl bg-cyan-400/10 text-3xl transition duration-300 group-hover:bg-cyan-400/20"
                >

                                     <span class="">
                                         <img  src="{{ asset('images/teethlogo2.jpg') }}"
                                               alt="د. راما محمد الرمضان"
                                                 class="rounded-full  h-15 w-15 object-cover"    >

                                         </span>
                </div>

                <h3 class="mt-6 text-xl font-black text-white">
                    علاج العصب
                </h3>

                <p class="mt-3 leading-7 text-slate-400">
                    علاج الأسنان المتضررة والحفاظ عليها
                    باستخدام تقنيات علاجية حديثة.
                </p>

            </div>



            {{-- Cosmetic Fillings --}}
            <div
                class="group rounded-3xl border border-white/10 bg-white/[0.04] p-7 shadow-xl backdrop-blur-xl transition duration-300 hover:-translate-y-2 hover:border-cyan-400/30 hover:bg-white/[0.07]"
            >

                <div
                    class="flex h-14 w-14 items-center justify-center rounded-2xl bg-cyan-400/10 text-3xl transition duration-300 group-hover:bg-cyan-400/20"
                >
                                     <span class="">
                                         <img  src="{{ asset('images/teethlogoflour.jpg') }}"
                                               alt="د. راما محمد الرمضان"
                                                 class="rounded-full  h-15 w-15 object-cover"    >

                                         </span>
                </div>

                <h3 class="mt-6 text-xl font-black text-white">
                    الحشوات التجميلية
                </h3>

                <p class="mt-3 leading-7 text-slate-400">
                    حشوات بلون قريب من لون الأسنان
                    لاستعادة الشكل والوظيفة بطريقة طبيعية.
                </p>

            </div>



            {{-- Pediatric Dentistry --}}
            <div
                class="group rounded-3xl border border-white/10 bg-white/[0.04] p-7 shadow-xl backdrop-blur-xl transition duration-300 hover:-translate-y-2 hover:border-cyan-400/30 hover:bg-white/[0.07]"
            >

                <div
                    class="flex h-14 w-14 items-center justify-center rounded-2xl bg-cyan-400/10 text-3xl transition duration-300 group-hover:bg-cyan-400/20"
                >
                                     <span class="">
                                         <img  src="{{ asset('images/teeeeeth.jpg') }}"
                                               alt="د. راما محمد الرمضان"
                                                 class="rounded-full  h-15 w-15 object-cover"    >

                                         </span>
                </div>

                <h3 class="mt-6 text-xl font-black text-white">
                    طب أسنان الأطفال
                </h3>

                <p class="mt-3 leading-7 text-slate-400">
                    رعاية لطيفة ومناسبة للأطفال مع الاهتمام
                    بصحة أسنانهم منذ الصغر.
                </p>

            </div>



            {{-- Veneers --}}
            <div
                class="group rounded-3xl border border-white/10 bg-white/[0.04] p-7 shadow-xl backdrop-blur-xl transition duration-300 hover:-translate-y-2 hover:border-cyan-400/30 hover:bg-white/[0.07]"
            >

                <div
                    class="flex h-14 w-14 items-center justify-center rounded-2xl bg-cyan-400/10 text-3xl transition duration-300 group-hover:bg-cyan-400/20"
                >

                                     <span class="">
                                         <img  src="{{ asset('images/teethlogo4.jpg') }}"
                                               alt="د. راما محمد الرمضان"
                                                 class="rounded-full  h-15 w-15 object-cover"    >

                                         </span>
                </div>

                <h3 class="mt-6 text-xl font-black text-white">
                    الفينير
                </h3>

                <p class="mt-3 leading-7 text-slate-400">
                    تحسين شكل الأسنان والابتسامة للحصول
                    على مظهر أكثر تناسقًا وجمالًا.
                </p>

            </div>



            {{-- Free Consultation --}}
            <div
                class="group rounded-3xl border border-cyan-400/30 bg-cyan-400/10 p-7 text-white shadow-xl backdrop-blur-xl transition duration-300 hover:-translate-y-2 hover:border-cyan-300/50 hover:bg-cyan-400/15"
            >

                <div
                    class="flex h-14 w-14 items-center justify-center rounded-2xl bg-cyan-400/20 text-3xl"
                >
                    💬
                </div>

                <h3 class="mt-6 text-xl font-black text-white">
                    استشارة مجانية
                </h3>

                <p class="mt-3 leading-7 text-cyan-100">
                    تواصلي معنا لمعرفة الخدمة الأنسب
                    لحالتك والحصول على الاستشارة الأولية.
                </p>

                <a
                    href="#appointment"
                    class="mt-6 inline-block rounded-full bg-cyan-400 px-5 py-2.5 text-sm font-bold text-slate-950 transition hover:bg-cyan-300"
                >
                    احجزي موعدك
                </a>

            </div>


        </div>

    </div>

</section>
    {{-- ================= ABOUT DOCTOR ================= --}}
    <section
        id="about"
        class="bg-[#F5F5F5] px-6 py-24"
    >

        <div class="mx-auto max-w-7xl">

            <div class="grid items-center gap-12 md:grid-cols-2 ">


                {{-- Doctor Image Placeholder --}}
                <div class="relative w-full ">

                    <div class=" ">

                        <div class="text-center">

                            <div class="">

                                <span class="text-6xl">
                                    <img  src="{{ asset('images/boy1.png') }}"
                                          alt="د. راما محمد الرمضان"
                                              class=" rounded-full h-auto w-auto object-cover object-center"    >
                                </span>

                            </div>


                        </div>

                    </div>

                </div>



                {{-- About Text --}}
                <div>

                    <span class="font-bold text-cyan-600">
                        تعرف على الطبيبة
                    </span>

                    <h2 class="mt-4 text-4xl font-black leading-tight text-slate-900 md:text-5xl">
                        عناية تبدأ بالاهتمام
                        <span class="text-cyan-600">
                            وتنتهي بابتسامة جميلة
                        </span>
                    </h2>

                    <p class="mt-7 text-lg leading-9 text-slate-600">
                        أنا الدكتورة راما محمد الرمضان، طبيبة أسنان，
                        أحرص على تقديم رعاية مريحة وشخصية لكل مريض，
                        مع الاهتمام بصحة الأسنان وجمال الابتسامة.
                    </p>


                    <div class="mt-8 grid grid-cols-2 gap-4">

                        <div class="rounded-2xl bg-slate-50 p-5">

                            <div class="text-3xl font-black text-cyan-600">
                                +3
                            </div>

                            <div class="mt-1 text-sm text-slate-500">
                                سنوات من الخبرة
                            </div>

                        </div>


                        <div class="rounded-2xl bg-slate-50 p-5">

                            <div class="text-3xl font-black text-cyan-600">
                                +1000
                            </div>

                            <div class="mt-1 text-sm text-slate-500">
                                ابتسامة ناجحة
                            </div>

                        </div>

                    </div>


                    <a
                        href="#appointment"
                        class="mt-8 inline-flex rounded-full bg-slate-900 px-7 py-4 font-bold text-white transition hover:bg-cyan-600"
                    >
                        احجز موعدك
                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= APPOINTMENT CTA ================= --}}
    <section
        id="appointment"
        class="bg-slate-950 px-6 py-24"
    >

        <div class="mx-auto max-w-5xl text-center">

            <span class="font-bold text-cyan-300">
                موعدك القادم يبدأ من هنا
            </span>

            <h2 class="mt-4 text-4xl font-black text-white md:text-5xl">
                جاهز لابتسامة أجمل؟
            </h2>

            <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                تواصل معنا واحجزي موعدك للحصول على الاستشارة
                والخدمة المناسبة لك.
            </p>

            <div class="mt-9 flex flex-wrap justify-center gap-4">
<a
    href="tel:+963996725984"
    class="rounded-full bg-cyan-500 px-8 py-4 font-bold text-white transition hover:bg-cyan-400"
>
    📞 اتصل بنا
</a>

<a
    href="https://wa.me/963996725984"
    target="_blank"
    rel="noopener noreferrer"
    class="rounded-full border border-white/20 bg-white/10 px-8 py-4 font-bold text-white transition hover:bg-white/20"
>
    💬 تواصل معنا
</a>

            </div>

        </div>

    </section>



    {{-- ================= FOOTER ================= --}}
    <footer
        id="contact"
        class="bg-slate-950 px-6 pb-10 text-white"
    >

        <div class="mx-auto max-w-7xl border-t border-white/10 pt-10">

            <div class="flex flex-col items-center justify-between gap-5 md:flex-row">

                <div>

                    <div class="text-lg font-black">
                        الدكتورة راما محمد الرمضان
                    </div>

                    <div class="mt-1 text-sm text-slate-400">
                        طب وتجميل الأسنان
                    </div>

                </div>


                <div class="text-sm text-slate-500">
                    © {{ date('Y') }} جميع الحقوق محفوظة
                </div>

            </div>

        </div>

    </footer>

</div>

@endsection

