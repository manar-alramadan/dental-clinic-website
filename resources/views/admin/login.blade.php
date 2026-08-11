@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-slate-950 px-6 py-12 text-white flex items-center justify-center">


<div class="w-full max-w-md">

    {{-- Header --}}
    <div class="mb-8 text-center">

        <div class=" mb-5 flex  justify-center    ">
          <span class="flex h-12 w-12 items-center justify-center rounded-full bg-white shadow-lg">
          <img  src="{{ asset('images/teethlogo3.jpg') }}"
                                        alt="د. راما محمد الرمضان"
                                          class="rounded-full  h-10 w-10 object-cover"    >

                                  </span>
        </div>

        <span class="font-bold text-cyan-300">
            Dr.Rama Mohammad Alramadan
        </span>

        <h1 class="mt-2 text-3xl font-black">
            تسجيل الدخول
        </h1>

        <p class="mt-3 text-slate-400">
            سجّل الدخول للوصول إلى لوحة التحكم.
        </p>

    </div>


    {{-- Errors --}}
    @if($errors->any())

        <div class="mb-6 rounded-2xl border border-red-400/20 bg-red-500/10 p-4 text-sm text-red-300">

            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach

        </div>

    @endif


    {{-- Login Form --}}
    <form
        method="POST"
        action="{{ route('admin.login.submit') }}"
        class="space-y-6 rounded-3xl border border-white/10 bg-white/5 p-6 shadow-2xl backdrop-blur-xl md:p-8"
    >

        @csrf


        {{-- Email --}}
        <div>

            <label
                for="email"
                class="mb-3 block text-sm font-bold text-slate-200"
            >
                البريد الإلكتروني
            </label>

            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email') }}"
                required
                autofocus
                autocomplete="email"
                placeholder="example@gmail.com"
                class="w-full rounded-2xl border border-white/10 bg-slate-900 px-5 py-4 text-white outline-none transition placeholder:text-slate-600 focus:border-cyan-400"
            >

        </div>


        {{-- Password --}}
        <div>

            <label
                for="password"
                class="mb-3 block text-sm font-bold text-slate-200"
            >
                كلمة المرور
            </label>

            <input
                id="password"
                name="password"
                type="password"
                required
                autocomplete="current-password"
                placeholder="••••••••"
                class="w-full rounded-2xl border border-white/10 bg-slate-900 px-5 py-4 text-white outline-none transition placeholder:text-slate-600 focus:border-cyan-400"
            >

        </div>


        {{-- Login Button --}}
        <button
            type="submit"
            class="w-full rounded-2xl bg-cyan-500 px-6 py-4 font-black text-white transition hover:bg-cyan-400"
        >
            تسجيل الدخول
        </button>

    </form>


    {{-- Back --}}
    <div class="mt-6 text-center">

        <a
            href="{{ url('/') }}"
            class="text-sm font-bold text-slate-400 transition hover:text-cyan-300"
        >
            ← العودة إلى الموقع
        </a>

    </div>

</div>


</div>

@endsection

