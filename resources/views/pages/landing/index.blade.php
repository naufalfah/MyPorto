@extends('pages.layouts.master')
@section('konten')
<div class="relative min-h-screen flex flex-col items-center justify-center overflow-hidden">

    <div class="absolute top-[-200px] left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-amber-500/8 rounded-full blur-[160px] pointer-events-none"></div>
    <div class="absolute bottom-[-100px] right-[-100px] w-[400px] h-[400px] bg-orange-600/6 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="relative z-10 flex flex-col items-center text-center px-6 max-w-3xl">

        <p class="text-xs uppercase tracking-[0.3em] text-neutral-500 mb-6">Personal Portfolio</p>

        <h1 class="text-7xl sm:text-8xl md:text-9xl font-black tracking-tighter text-white leading-[0.85]">
            PORTO<span class="text-amber-500">.</span><br class="sm:hidden">FOLIO
        </h1>

        <p class="mt-6 text-neutral-400 text-base sm:text-lg max-w-md leading-relaxed">
            Muhammad Naufal Fahrezi — siswa RPL yang suka ngoding dan membangun project web.
        </p>

        <div class="w-12 h-[2px] bg-amber-500/40 rounded-full mt-8 mb-8"></div>

        <nav class="flex flex-col sm:flex-row items-center gap-4 sm:gap-8">
            <a href="data"
               class="group flex items-center gap-2 text-sm font-semibold text-neutral-300 bg-amber-700 rounded-xl border-2 border-amber-900 p-2 hover:text-amber-400 hover:bg-amber-900 transition-colors duration-200">
                Tentang Saya
            </a>
            <a href="project"
               class="group flex items-center gap-2 text-sm font-semibold text-neutral-300 bg-amber-700 rounded-xl border-2 border-amber-900 p-2 hover:text-amber-400 hover:bg-amber-900 transition-colors duration-200">
                Projek Saya
            </a>
        </nav>
    </div>

</div>
@endsection