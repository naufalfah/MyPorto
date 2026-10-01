@extends('pages.admin.layouts.master')
@section('konten')
    <h1 class="text-3xl">Portofolio saya</h1>
    <p class="mt-5">ini adalah Portofolio saya</p>
    <div class="flex justify-end items-center mt-5">
        <a href="/portofolio/create" class="py-2 px-4 bg-yellow-500 rounded-xl text-white hover:bg-yellow-600 transition duration-300">+ Tambahkan Data</a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-5">
        @forelse ($data_porto as $item)
            <div class="flex flex-col h-full min-w-0 p-8 bg-white rounded-xl shadow-md hover:-translate-y-1 transition duration-300">
                <div class="flex flex-1 flex-col gap-5 min-w-0">
                    <div class="flex items-center justify-center h-10 w-10 bg-blue-600 rounded-xl">
                        <p class="text-white">{{ $loop->iteration }}</p>
                    </div>
                    <div class="flex flex-col min-w-0">
                        <h2 class="font-bold text-2xl truncate">{{ $item->nama }}</h2>
                        <p class="text-xs text-gray-500 truncate">{{ $item->sub }}</p>
                        <p class="mt-5 py-2 px-4 bg-blue-600 border border-blue-600 rounded-xl text-white truncate">{{ $item->deskripsi }}</p>
                        <div class="flex items-center justify-between mt-5">
                            <a href="{{$item->link}}" class="py-2 text-blue-600">Kunjungi situs &rarr;</a>
                            <div class="flex gap-3">
                                <a href="/portofolio/{{$item->id}}/edit" class="flex flex-1 px-4 py-2 bg-yellow-500 text-white rounded-xl hover:scale-105 transition duration-300">Edit</a>
                                <form action="/portofolio/{{$item->id}}" method="POST" onsubmit="return confirm('Yakin ingin mengahapus data ini?')">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="flex flex-1 text-center px-4 py-2 bg-red-500 text-white rounded-xl hover:scale-105 transition duration-300">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full flex items-center justify-center my-auto h-[70vh]">
                <p class="text-gray-500">Tidak ada data</p>
            </div>
        @endforelse
    </div>
@endsection