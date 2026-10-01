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

    <div class="max-w-5xl mx-auto">
        {{-- Page Header --}}
        <div class="mb-10">
            <p class="text-xs uppercase tracking-[0.2em] text-neutral-500 mb-2">Portofolio</p>
            <h1 class="text-3xl sm:text-4xl font-bold text-white tracking-tight">Projek Saya</h1>
            <p class="text-neutral-400 text-sm mt-2 max-w-lg">Kumpulan project yang sudah saya buat selama belajar pemrograman.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($data_porto as $item)
                <div class="group rounded-2xl bg-neutral-900/60 border border-neutral-800/60 overflow-hidden hover:border-amber-500/30 transition-all duration-300 hover:-translate-y-1 h-full flex flex-col">
                    <div class="p-5 flex flex-col flex-1">
                        <h3 class="font-bold text-white text-lg group-hover:text-amber-400 transition-colors">{{$item->nama}}</h3>
                        <p class="text-neutral-400 text-xs mt-1.5 leading-relaxed truncate">
                            {{$item->sub}}
                        </p>
                        <p class="text-neutral-400 text-sm mt-1.5 leading-relaxed">
                            {{$item->deskripsi}}
                        </p>

                        <a href="{{$item->link}}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-amber-500 hover:text-amber-400 mt-auto pt-4 transition-colors">
                            Lihat Detail
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</div>
@endsection
