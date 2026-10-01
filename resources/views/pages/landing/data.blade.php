@extends('pages.layouts.master')
@section('konten')
<div class="min-h-screen py-12 px-6 sm:px-10 lg:px-16">

    {{-- Back link --}}
    <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-sm text-neutral-500 hover:text-amber-400 transition-colors mb-10">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
        </svg>
        Kembali
    </a>

    <div class="max-w-5xl mx-auto grid grid-cols-1 lg:grid-cols-5 gap-10 items-start">

        {{-- Left: Photo --}}
        <div class="lg:col-span-2">
            <div class="rounded-2xl overflow-hidden border border-neutral-800/60 aspect-[3/5    ]">
                <img src="{{ asset('foto/naufal.JPG') }}"
                     alt="{{ $nama }}"
                     class="w-full h-full">
            </div>
            {{-- Name card below photo --}}
            <div class="mt-4 text-center lg:text-left">
                <h1 class="text-2xl font-bold text-white tracking-tight">{{ $nama }}</h1>
                <p class="text-amber-500 text-sm font-medium mt-1">{{ $kelas }} · {{ $sekolah }}</p>
            </div>
        </div>

        {{-- Right: About & Skills --}}
        <div class="lg:col-span-3 space-y-8">

            {{-- About --}}
            <section>
                <h2 class="text-xs uppercase tracking-[0.2em] text-neutral-500 mb-4">Tentang Saya</h2>
                <div class="text-neutral-300 text-[15px] leading-relaxed space-y-4">
                    <p>
                        Halo! Saya <strong class="text-white">{{ $nama }}</strong>, pelajar Rekayasa Perangkat Lunak
                        di {{ $sekolah }}. Saya punya ketertarikan besar terhadap dunia pemrograman dan teknologi.
                    </p>
                    <p>
                        Saya mulai belajar pemrograman dari dasar dan terus mengembangkan kemampuan lewat berbagai project,
                        terutama di bidang web development. Bagi saya, coding bukan cuma soal menulis kode — tapi bagaimana
                        mengubah ide menjadi sesuatu yang bisa digunakan orang lain.
                    </p>
                    <p class="text-neutral-500">
                        Saat ini saya masih terus berkembang dan membangun pengalaman. Ke depan, saya ingin jadi programmer
                        yang kompeten dan bisa menghasilkan project yang bermanfaat.
                    </p>
                </div>
                <div class="flex gap-5">
                    <a href="https://www.linkedin.com/in/muhammad-naufal-fahrezi-a20375440?utm_source=share_via&utm_content=profile&utm_medium=member_android" class="flex mt-3 gap-5 items-center">
                        <div class="flex items-center px-3 py-3 text-xs gap-2 font-medium rounded-lg bg-neutral-900 border border-neutral-800 text-neutral-300 hover:border-amber-500/40 hover:text-amber-400 transition-colors duration-200">
                            <img src="{{asset('foto/LI.png')}}" class="w-7" alt=""> LinkedIn
                        </div>
                    </a>
                    <a href="https://github.com/naufalfah" class="flex mt-3 gap-5 items-center">
                        <div class="flex items-center px-3 py-3 text-xs gap-2 font-medium rounded-lg bg-neutral-900 border border-neutral-800 text-neutral-300 hover:border-amber-500/40 hover:text-amber-400 transition-colors duration-200">
                            <img src="{{asset('foto/GH.png')}}" class="w-6.5" alt=""> Github
                        </div>
                    </a>
                </div>
            </section>

            {{-- Divider --}}
            <div class="border-t border-neutral-800/60"></div>

            {{-- Tech Stack --}}
            <section>
                <h2 class="text-xs uppercase tracking-[0.2em] text-neutral-500 mb-4">Teknologi</h2>
                <div class="flex flex-wrap gap-2">
                    @foreach (['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel', 'MySQL', 'React', 'TypeScript', 'Tailwind CSS'] as $tech)
                        <span class="px-3 py-1.5 text-xs font-medium rounded-lg bg-neutral-900 border border-neutral-800 text-neutral-300 hover:border-amber-500/40 hover:text-amber-400 transition-colors duration-200">
                            {{ $tech }}
                        </span>
                    @endforeach
                </div>
            </section>

            {{-- Divider --}}
            <div class="border-t border-neutral-800/60"></div>

            {{-- Quick info --}}
            <section>
                <h2 class="text-xs uppercase tracking-[0.2em] text-neutral-500 mb-4">Info</h2>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="p-4 rounded-xl bg-neutral-900/50 border border-neutral-800/50">
                        <p class="text-[11px] uppercase tracking-wider text-neutral-500 mb-1">Sekolah</p>
                        <p class="text-sm font-semibold text-white">{{ $sekolah }}</p>
                    </div>
                    <div class="p-4 rounded-xl bg-neutral-900/50 border border-neutral-800/50">
                        <p class="text-[11px] uppercase tracking-wider text-neutral-500 mb-1">Kelas</p>
                        <p class="text-sm font-semibold text-white">{{ $kelas }}</p>
                    </div>
                    <div class="p-4 rounded-xl bg-neutral-900/50 border border-neutral-800/50">
                        <p class="text-[11px] uppercase tracking-wider text-neutral-500 mb-1">Fokus</p>
                        <p class="text-sm font-semibold text-amber-400">Full-Stack Web</p>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
@endsection