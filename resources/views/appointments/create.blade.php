<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>حجز موعد | د. راما محمد الرمضان</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-950 text-white">

    {{-- Background Effects --}}
    <div class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">

        <div class="absolute -right-32 -top-32 h-96 w-96 rounded-full bg-cyan-500/10 blur-3xl"></div>

        <div class="absolute -bottom-32 -left-32 h-96 w-96 rounded-full bg-cyan-400/10 blur-3xl"></div>

        <div class="absolute left-1/2 top-1/2 h-80 w-80 -translate-x-1/2 -translate-y-1/2 rounded-full bg-blue-500/5 blur-3xl"></div>

    </div>


    {{-- Navbar --}}
    <header class="border-b border-white/10 bg-slate-950/80 backdrop-blur-xl">

        <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-5 lg:px-8">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3">

                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-white shadow-lg">

                    <img
                        src="{{ asset('images/teethlogo3.jpg') }}"
                        alt="د. راما محمد الرمضان"
                        class="h-10 w-10 rounded-full object-cover"
                    >

                </div>

                <div class="leading-tight">

                    <div class="text-base font-black text-white sm:text-lg">
                        د. راما محمد الرمضان
                    </div>

                    <div class="text-xs text-cyan-300">
                        طب وتجميل الأسنان
                    </div>

                </div>

            </a>


            {{-- Back Button --}}
            <a
                href="{{ route('home') }}"
                class="rounded-full border border-white/10 bg-white/5 px-5 py-2.5 text-sm font-bold text-slate-200 transition hover:border-cyan-400/30 hover:bg-cyan-500/10 hover:text-cyan-300"
            >
                العودة للرئيسية
            </a>

        </nav>

    </header>


    {{-- Main --}}
    <main class="mx-auto max-w-5xl px-4 py-10 sm:px-6 lg:px-8 lg:py-16">


        {{-- Page Header --}}
        <div class="mb-10 text-center">

            <div class="mb-5 inline-flex items-center gap-3 rounded-full border border-cyan-400/20 bg-cyan-400/10 px-5 py-2.5">

                <span class="h-2.5 w-2.5 animate-pulse rounded-full bg-cyan-400"></span>

                <span class="text-sm font-bold text-cyan-300">
                    احجز موعدك الآن
                </span>

            </div>


            <h1 class="text-3xl font-black leading-tight text-white sm:text-4xl lg:text-5xl">

                احجز موعدك مع

                <span class="text-cyan-400">
                    الدكتورة راما محمد الرمضان
                </span>

            </h1>


            <p class="mx-auto mt-5 max-w-2xl text-base leading-8 text-slate-400 sm:text-lg">

                اختر الخدمة والوقت المناسب لك وأدخل بياناتك لإرسال طلب حجز الموعد.

            </p>

        </div>


        {{-- Validation Errors --}}
        @if ($errors->any())

            <div class="mb-8 rounded-2xl border border-red-400/20 bg-red-500/10 p-5">

                <div class="mb-3 font-bold text-red-300">
                    يرجى تصحيح الأخطاء التالية:
                </div>

                <ul class="space-y-2 text-sm text-red-200">

                    @foreach ($errors->all() as $error)

                        <li>
                            • {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        {{-- Form Card --}}
        <div class="overflow-hidden rounded-3xl border border-white/10 bg-slate-900/80 shadow-2xl backdrop-blur-xl">


            {{-- Card Header --}}
            <div class="border-b border-white/10 bg-white/[0.03] px-6 py-6 sm:px-8">

                <div class="flex items-center gap-4">

                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-cyan-500/10 text-2xl">
                        📅
                    </div>

                    <div>

                        <h2 class="text-xl font-black text-white sm:text-2xl">
                            بيانات الموعد
                        </h2>

                        <p class="mt-1 text-sm text-slate-400">
                            يرجى إدخال معلوماتك بدقة
                        </p>

                    </div>

                </div>

            </div>


            {{-- Form --}}
            <form
            id="appointmentForm"
                action="#"
                method="POST"
                class="p-6 sm:p-8 lg:p-10"
            >




                {{-- Patient Information --}}
                <div class="mb-10">

                    <div class="mb-6 flex items-center gap-3">

                        <div class="h-8 w-1 rounded-full bg-cyan-400"></div>

                        <h3 class="text-xl font-black text-white">
                            معلومات المريض
                        </h3>

                    </div>


                    <div class="grid gap-6 md:grid-cols-2">


                        {{-- Full Name --}}
                        <div>

                            <label
                                for="patient_name"
                                class="mb-3 block text-base font-bold text-slate-200"
                            >
                                الاسم الكامل
                                <span class="text-cyan-400">*</span>
                            </label>

                            <input
                                type="text"
                                id="patient_name"
                                name="patient_name"

                                placeholder="أدخل اسمك الكامل"
                                required
                                class="w-full rounded-2xl border border-slate-300 bg-white px-5 py-4 text-base text-slate-900 outline-none placeholder:text-slate-500 transition focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20"
                            >

                            @error('patient_name')

                                <p class="mt-2 text-sm text-red-400">
                                    {{ $message }}
                                </p>

                            @enderror

                        </div>


                        {{-- Phone --}}
                        <div>

                            <label
                                for="phone"
                                class="mb-3 block text-base font-bold text-slate-200"
                            >
                                رقم الهاتف
                                <span class="text-cyan-400">*</span>
                            </label>

                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                value="{{ old('phone') }}"
                                placeholder="مثال: 0996725984"
                                required
                                class="w-full rounded-2xl border border-slate-300 bg-slate-800/80 px-5 py-4 text-base text-slate-900 outline-none  bg-white placeholder:text-slate-500 transition focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20"
                            >

                            @error('phone')

                                <p class="mt-2 text-sm text-red-400">
                                    {{ $message }}
                                </p>

                            @enderror

                        </div>

                    </div>

                </div>


                {{-- Appointment Details --}}
                <div class="mb-10">

                    <div class="mb-6 flex items-center gap-3">

                        <div class="h-8 w-1 rounded-full bg-cyan-400"></div>

                        <h3 class="text-xl font-black text-white">
                            تفاصيل الموعد
                        </h3>

                    </div>


                    <div class="grid gap-6 md:grid-cols-2">


                        {{-- Service --}}
                        <div class="md:col-span-2">

                            <label
                                for="service"
                                class="mb-3 block text-base font-bold text-slate-200"
                            >
                                الخدمة المطلوبة
                                <span class="text-cyan-400">*</span>
                            </label>
<select
  id="service"
  name="service"
  required
  class="w-full rounded-2xl border border-slate-300 bg-white px-5 py-4 text-base text-slate-900 outline-none transition focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20"
>
  <option value="" disabled selected class="text-slate-400">
    اختر الخدمة المطلوبة
  </option>

  <option value="تنظيف الأسنان" class="text-slate-900">
    تنظيف الأسنان
  </option>

  <option value="تبييض الأسنان" class="text-slate-900">
    تبييض الأسنان
  </option>

  <option value="هوليوود سمايل" class="text-slate-900">
      أبتسامة هوليوود
  </option>

  <option value="الحشوات التجميلية" class="text-slate-900">
    الحشوات التجميلية
  </option>

  <option value="علاج العصب" class="text-slate-900">
    علاج العصب
  </option>

  <option value="طب أسنان الأطفال" class="text-slate-900">
    طب أسنان الأطفال
  </option>

  <option value="الفينير" class="text-slate-900">
    الفينير
  </option>
</select>
                            @error('service')

                                <p class="mt-2 text-sm text-red-400">
                                    {{ $message }}
                                </p>

                            @enderror

                        </div>




                        {{-- Notes --}}
                        <div class="md:col-span-2">

                            <label
                                for="notes"
                                class="mb-3 block text-base font-bold text-slate-200"
                            >
                                أكتب هنا  اي تفاصيل أخرى
                                <span class="font-normal text-slate-500">

                                </span>
                            </label>

                            <textarea
                                id="notes"
                                name="notes"
                                rows="5"
                                placeholder="اكتب  التاريخ والوقت المناسب لك   ..."
                                class="w-full resize-none rounded-2xl border border-slate-300 bg-slate-800/80 px-5 py-4 text-base leading-7 text-slate-900 bg-white outline-none placeholder:text-slate-500 transition focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20"


                            >{{ old('notes') }}</textarea>

                            @error('notes')

                                <p class="mt-2 text-sm text-red-400">
                                    {{ $message }}
                                </p>

                            @enderror

                        </div>

                    </div>

                </div>


             {{-- Payment --}}
             <div class="mb-10">

                 <div class="mb-6 flex items-center gap-3">

                     <div class="h-8 w-1 rounded-full bg-cyan-400"></div>

                     <div>
                         <h3 class="text-xl font-black text-white">
                             طريقة الدفع
                         </h3>

                         <p class="mt-1 text-sm text-slate-400">
                             اختر طريقة الدفع المناسبة لك
                         </p>
                     </div>

                 </div>


                 <div class="grid gap-5 md:grid-cols-2">

                     {{-- ===================================================== --}}
                     {{-- Sham Cash --}}
                     {{-- ===================================================== --}}

                     <label class="block cursor-pointer">

                         <input
                             type="radio"
                             name="payment_method"
                             value="sham_cash"
                             class="sham-payment-radio sr-only"
                             required
                         >

                         <div
                             class="rounded-3xl border border-white/10 bg-slate-800/70 p-6
                                    transition duration-300
                                    hover:border-cyan-400/40
                                    hover:bg-slate-800"
                         >

                             {{-- Header --}}
                             <div class="flex items-center gap-4">

                                 <div
                                     class="flex h-14 w-14 shrink-0 items-center justify-center
                                            rounded-2xl bg-cyan-500/10 text-2xl"
                                 >
                                     💳
                                 </div>

                                 <div>

                                     <h4 class="text-lg font-black text-white">
                                         شام كاش
                                     </h4>

                                     <p class="mt-1 text-sm font-medium text-cyan-300">
                                         أولوية في تأكيد الحجز
                                     </p>

                                 </div>

                             </div>


                             {{-- Description --}}
                             <p class="mt-5 text-sm leading-7 text-slate-400">

                                 ادفع قيمة الحجز عبر شام كاش باستخدام رمز QR التالي،
                                 ثم اضغط على زر تأكيد الحجز بعد إتمام عملية الدفع.

                             </p>


                             {{-- Sham Cash Details --}}
                             <div
                                 class="sham-cash-details mt-6 hidden rounded-2xl
                                        border border-cyan-400/20 bg-slate-950/70 p-5"
                             >

                                 {{-- QR Code --}}
                                 <div class="text-center">

                                     <p class="mb-4 text-sm font-bold text-cyan-300">
                                         رمز الدفع عبر شام كاش
                                     </p>


                                     <div
                                         class="mx-auto flex w-fit items-center justify-center
                                                rounded-2xl bg-white p-3 shadow-xl"
                                     >

                                         <img
                                             src="{{ asset('images/shamCashforRama.jpeg') }}"
                                             alt="رمز شام كاش الخاص بعيادة د. راما"
                                             class="h-52 w-52 rounded-xl object-contain sm:h-60 sm:w-60"
                                         >

                                     </div>

                                 </div>


                                 {{-- Sham Cash Code --}}
                                 <div class="mt-6">

                                     <label
                                         for="sham_cash_code"
                                         class="mb-2 block text-sm font-bold text-slate-300"
                                     >
                                         كود شام كاش
                                     </label>


                                     <div class="flex gap-2">

                                         <input
                                             type="text"
                                             id="sham_cash_code"
                                             value="9ba6e4edc4e93078f74ae4245a35f80f"
                                             readonly
                                             dir="ltr"
                                             class="min-w-0 flex-1 rounded-xl border
                                                    border-white/10 bg-slate-800 px-4 py-3
                                                    text-center font-bold tracking-wider
                                                    text-white outline-none"
                                         >


                                         <button
                                             type="button"
                                             id="copyShamCashButton"
                                             class="shrink-0 rounded-xl bg-cyan-500 px-4 py-3
                                                    font-bold text-slate-950 transition
                                                    hover:bg-cyan-400"
                                         >
                                             نسخ
                                         </button>

                                     </div>


                                     <p
                                         id="copyMessage"
                                         class="mt-2 hidden text-center
                                                text-xs font-bold text-emerald-400"
                                     >
                                         ✓ تم نسخ الكود بنجاح
                                     </p>

                                 </div>


                                 {{-- Payment Notice --}}
                                 <div
                                     class="mt-5 rounded-xl border border-amber-400/10
                                            bg-amber-400/5 p-4"
                                 >

                                     <p class="text-center text-xs leading-6 text-amber-200">

                                         بعد إتمام الدفع، اضغط على
                                         <strong>تأكيد حجز الموعد</strong>
                                         وسيتم إرسال بيانات الحجز إلى العيادة للتحقق من الدفع.

                                     </p>

                                 </div>

                             </div>

                         </div>

                     </label>



                     {{-- ===================================================== --}}
                     {{-- Clinic Payment --}}
                     {{-- ===================================================== --}}

                     <label class="block cursor-pointer">

                         <input
                             type="radio"
                             name="payment_method"
                             value="clinic"
                             class="clinic-payment-radio sr-only"
                         >


                         <div
                             class="rounded-3xl border border-white/10 bg-slate-800/70 p-6
                                    transition duration-300
                                    hover:border-cyan-400/40
                                    hover:bg-slate-800"
                         >

                             <div class="flex items-center gap-4">

                                 <div
                                     class="flex h-14 w-14 items-center justify-center
                                            rounded-2xl bg-white/5 text-2xl"
                                 >
                                     🏥
                                 </div>


                                 <div>

                                     <h4 class="text-lg font-black text-white">
                                         الدفع في العيادة
                                     </h4>

                                     <p class="mt-1 text-sm text-slate-400">
                                         الدفع عند الحضور
                                     </p>

                                 </div>

                             </div>


                             <p class="mt-5 text-sm leading-7 text-slate-400">

                                 يتم دفع تكلفة الخدمة مباشرة عند الحضور إلى العيادة.

                             </p>

                         </div>

                     </label>

                 </div>


                 @error('payment_method')

                     <p class="mt-3 text-sm text-red-400">
                         {{ $message }}
                     </p>

                 @enderror

             </div>



             {{-- Notice --}}
             <div class="mb-8 rounded-2xl border border-cyan-400/10 bg-cyan-400/5 p-5">

                 <div class="flex gap-4">

                     <div class="text-xl">
                         ℹ️
                     </div>


                     <div>

                         <h4 class="font-bold text-cyan-300">
                             ملاحظة مهمة
                         </h4>


                         <p class="mt-2 text-sm leading-7 text-slate-400">

                             بعد إرسال طلب الحجز سيتم مراجعته من قبل العيادة.
                             الحجوزات المدفوعة عبر شام كاش تحصل على أولوية في التحقق.

                         </p>

                     </div>

                 </div>

             </div>



             {{-- Submit --}}
             <button
                 type="button"
                 id="whatsappBookingButton"
                 class="flex w-full items-center justify-center gap-3
                        rounded-2xl bg-cyan-500 px-6 py-5 text-lg font-black
                        text-slate-950 shadow-xl shadow-cyan-500/10
                        transition hover:-translate-y-1 hover:bg-cyan-400"
             >

                 <span>
                     تأكيد حجز الموعد
                 </span>

                 <span>
                     ←
                 </span>

             </button>


             <p class="mt-5 text-center text-xs leading-6 text-slate-500">

                 سيتم إرسال طلب الحجز إلى العيادة لمراجعته.

             </p>

            </form>

        </div>


        {{-- Bottom Features --}}
        <div class="mt-8 grid gap-4 sm:grid-cols-3">

            <div class="rounded-2xl border border-white/10 bg-slate-900/60 p-5 text-center">

                <div class="mb-2 text-2xl">
                    🔒
                </div>

                <h4 class="font-bold text-white">
                    خصوصية بياناتك
                </h4>

                <p class="mt-1 text-xs leading-6 text-slate-500">
                    نحافظ على سرية معلوماتك
                </p>

            </div>

<a
    href="https://wa.me/963996725984?text=%D9%85%D8%B1%D8%AD%D8%A8%D8%A7%D9%8B%D8%8C%20%D8%A3%D8%B1%D9%8A%D8%AF%20%D8%A7%D9%84%D8%AA%D9%88%D8%A7%D8%B5%D9%84%20%D9%85%D8%B9%D9%83%D9%85"
    target="_blank"
    rel="noopener noreferrer"
    class="block rounded-2xl border border-white/10 bg-slate-900/60 p-5 text-center transition hover:border-cyan-400/50"
>
    <div class="mb-2 text-2xl">
        📞
    </div>

    <h4 class="font-bold text-white">
        تواصل معنا
    </h4>

    <p class="mt-1 text-xs leading-6 text-slate-500">
        نحن هنا لمساعدتك
    </p>
</a>

            <div class="rounded-2xl border border-white/10 bg-slate-900/60 p-5 text-center">

                <div class="mb-2 text-2xl">
                    🦷
                </div>

                <h4 class="font-bold text-white">
                    رعاية متخصصة
                </h4>

                <p class="mt-1 text-xs leading-6 text-slate-500">
                    عناية تناسب احتياجاتك
                </p>

            </div>

        </div>
<script>
document.addEventListener('DOMContentLoaded', function () {

    const shamCashRadio = document.querySelector('.sham-payment-radio');
    const clinicRadio = document.querySelector('.clinic-payment-radio');
    const shamCashDetails = document.querySelector('.sham-cash-details');

    const copyButton = document.getElementById('copyShamCashButton');
    const copyMessage = document.getElementById('copyMessage');

    const whatsappButton = document.getElementById('whatsappBookingButton');


    /*
    |--------------------------------------------------------------------------
    | Show / Hide Sham Cash Details
    |--------------------------------------------------------------------------
    */

    shamCashRadio.addEventListener('change', function () {

        if (this.checked) {

            shamCashDetails.classList.remove('hidden');

        }

    });


    clinicRadio.addEventListener('change', function () {

        if (this.checked) {

            shamCashDetails.classList.add('hidden');

        }

    });


    /*
    |--------------------------------------------------------------------------
    | Copy Sham Cash Code
    |--------------------------------------------------------------------------
    */

    copyButton.addEventListener('click', async function () {

        const code = document.getElementById('sham_cash_code').value;

        try {

            await navigator.clipboard.writeText(code);

            copyMessage.classList.remove('hidden');

            copyButton.textContent = 'تم النسخ ✓';

            setTimeout(function () {

                copyMessage.classList.add('hidden');

                copyButton.textContent = 'نسخ';

            }, 2500);

        } catch (error) {

            const input = document.getElementById('sham_cash_code');

            input.select();

            document.execCommand('copy');

            copyMessage.classList.remove('hidden');

            copyButton.textContent = 'تم النسخ ✓';

            setTimeout(function () {

                copyMessage.classList.add('hidden');

                copyButton.textContent = 'نسخ';

            }, 2500);

        }

    });


    /*
    |--------------------------------------------------------------------------
    | WhatsApp Booking
    |--------------------------------------------------------------------------
    */

    whatsappButton.addEventListener('click', function () {

        const name = document
            .getElementById('patient_name')
            .value
            .trim();

        const phone = document
            .getElementById('phone')
            .value
            .trim();

        const service = document
            .getElementById('service')
            .value;

        const notes = document
            .getElementById('notes')
            .value
            .trim();


        /*
        |--------------------------------------------------------------------------
        | Validate Patient Data
        |--------------------------------------------------------------------------
        */

        if (!name || !phone || !service) {

            alert('يرجى تعبئة الاسم ورقم الهاتف واختيار الخدمة.');

            return;

        }


        /*
        |--------------------------------------------------------------------------
        | Payment Method
        |--------------------------------------------------------------------------
        */

        const paymentMethod = document.querySelector(
            'input[name="payment_method"]:checked'
        );


        if (!paymentMethod) {

            alert('يرجى اختيار طريقة الدفع.');

            return;

        }


        let paymentText = 'الدفع في العيادة';


        if (paymentMethod.value === 'sham_cash') {

            paymentText = 'شام كاش';

        }


        /*
        |--------------------------------------------------------------------------
        | WhatsApp Message
        |--------------------------------------------------------------------------
        */

        const message = `
🦷 *طلب حجز موعد جديد*

━━━━━━━━━━━━━━

👤 *بيانات المريض*

الاسم: ${name}
رقم الهاتف: ${phone}

━━━━━━━━━━━━━━

🩺 *الخدمة المطلوبة*

${service}

━━━━━━━━━━━━━━

💳 *طريقة الدفع*

${paymentText}

━━━━━━━━━━━━━━

📝 *ملاحظات المريض*

${notes || 'لا توجد ملاحظات'}

━━━━━━━━━━━━━━

يرجى التواصل مع المريض لتحديد الموعد المناسب.

        `.trim();


        /*
        |--------------------------------------------------------------------------
        | Doctor WhatsApp
        |--------------------------------------------------------------------------
        */

        const doctorWhatsApp = '963996725984';


        const whatsappUrl =
            'https://wa.me/' +
            doctorWhatsApp +
            '?text=' +
            encodeURIComponent(message);


        window.open(whatsappUrl, '_blank');

    });

});
</script>
    </main>


    {{-- Footer --}}
    <footer class="border-t border-white/10 bg-slate-950 py-8">

        <div class="mx-auto max-w-7xl px-5 text-center">

            <p class="text-sm text-slate-500">
                © {{ date('Y') }}
                د. راما محمد الرمضان
                — طب وتجميل الأسنان
            </p>

        </div>

    </footer>
<script>
    function copyShamCashCode() {
        const codeInput = document.getElementById('sham_cash_code');
        const copyMessage = document.getElementById('copyMessage');

        navigator.clipboard.writeText(codeInput.value).then(() => {

            copyMessage.classList.remove('hidden');

            setTimeout(() => {
                copyMessage.classList.add('hidden');
            }, 2500);

        }).catch(() => {

            codeInput.select();
            document.execCommand('copy');

            copyMessage.classList.remove('hidden');

            setTimeout(() => {
                copyMessage.classList.add('hidden');
            }, 2500);
        });
    }
</script>
</body>

</html>
<script>
    document.getElementById('whatsappBookingButton').addEventListener('click', function () {

        const name = document.getElementById('patient_name').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const service = document.getElementById('service').value;
        const notes = document.getElementById('notes').value.trim();

        if (!name || !phone || !service) {
            alert('يرجى تعبئة الاسم ورقم الهاتف واختيار الخدمة.');
            return;
        }

        const message = `
لب حجز موعد جديد

بيانات المريض
الاسم: ${name}
رقم الهاتف: ${phone}

الخدمة المطلوبة
${service}

ملاحظات المريض
${notes || 'لا توجد ملاحظات'}

━━━━━━━━━━━━━━
يرجى التواصل مع المريض لتحديد الموعد المناسب.
        `.trim();

        const doctorWhatsApp = '963996725984';

        const whatsappUrl =
            'https://wa.me/' +
            doctorWhatsApp +
            '?text=' +
            encodeURIComponent(message);

        window.open(whatsappUrl, '_blank');
    });
</script>
