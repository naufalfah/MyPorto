@extends('pages.admin.layouts.master')
@section('konten')
    <h1 class="text-3xl">Edit Data</h1>
    <p class="mt-5">Ubah data dari portofolio</p>
    <div class="flex justify-end items-center mt-5">
        <a href="/portofolio" class="py-2 px-4 bg-yellow-500 rounded-xl text-white hover:bg-yellow-600 transition duration-300">&larr; Kembali</a>
    </div>
    <form action="/portofolio/{{$data_porto -> id}}" method="POST">
        @csrf
        @method('put')
        <div class="grid grid-cols-3 items-start justify-center gap-5">
            <div class="flex flex-1 flex-col">
                <label for="" class="text-sm text-gray-600 font-semibold">Judul</label>
                <input type="text" name="nama" class="mt-2 border border-gray-900 rounded-xl px-4 py-2" value="{{$data_porto->nama}}" placeholder="Masukkan judul porotofolio" id="">
                @error('nama')
                    <p class="text-red-500 text-xs pt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-1 flex-col">
                <label for="" class="text-sm text-gray-600 font-semibold">Sub-judul</label>
                <input type="text" name="sub" class="mt-2 border border-gray-900 rounded-xl px-4 py-2" value="{{$data_porto->sub}}" placeholder="Masukkan sub-judul porotofolio" id="">
                @error('sub')
                    <p class="text-red-500 text-xs pt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-1 flex-col">
                <label for="" class="text-sm text-gray-600 font-semibold">Link Projek</label>
                <input type="url" name="link" class="mt-2 border border-gray-900 rounded-xl px-4 py-2" value="{{$data_porto->link}}" placeholder="https://github.com/" id="">
                @error('link')
                    <p class="text-red-500 text-xs pt-1">{{$message}}</p>
                @enderror
            </div>
        </div>
        <div class="flex flex-col gap-2 w-full mt-5">
            <label for="" class="text-sm text-gray-600 font-semibold">Deskripsi</label>
            <textarea name="deskripsi" id="" rows="6" placeholder="Masukkan deskripsi portofolio" class="w-full border border-gray-900 rounded-xl px-4 py-2">{{$data_porto->deskripsi}}</textarea>
            @error('deskripsi')
                <p class="text-red-500 text-xs pt-1">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="w-full mt-5 bg-yellow-500 py-2 text-white rounded-xl hover:bg-yellow-600 hover:scale-99 transition duration-300">Perbarui Data</button>
    </form>
@endsection