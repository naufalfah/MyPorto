<?php

namespace App\Http\Controllers;

use App\Models\Porto;
use Illuminate\Http\Request;

class PortoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Porto::get();
        return view('pages.admin.portofolio.show', [
            'data_porto' => $data,
            'title' => 'List Portofolio'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.portofolio.add', [
            'title' => 'Tambah Data'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nama' => 'required',
            'sub' => 'required',
            'deskripsi' => 'required',
            'link' => 'url'
        ], [
            'nama.required' => 'Masukkan judul yang valid',
            'sub.required' => 'Masukkan sub judul yang valid',
            'deskripsi.required' => 'Masukkan deskripsi yang valid',
            'link.url' => 'Link harus awali http:// atau https://',
        ]);

        Porto::create([
            'nama' => $request -> nama,
            'sub' => $request -> sub,
            'deskripsi' => $request -> deskripsi,
            'link' => $request -> link,
        ]);

        return redirect('portofolio') -> with('pesan', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Porto::findOrFail($id);
        return view('pages.admin.portofolio.edit', [
            'title' => 'Tambah Data',
            'data_porto' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'sub' => 'required',
            'deskripsi' => 'required',
            'link' => 'url'
        ], [
            'nama.required' => 'Masukkan judul yang valid',
            'sub.required' => 'Masukkan sub judul yang valid',
            'deskripsi.required' => 'Masukkan deskripsi yang valid',
            'link.url' => 'Link harus awali http:// atau https://',
        ]);

        Porto::where('id', $id)->update([
            'nama' => $request->nama,
            'sub' => $request->sub,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link,
        ]);

        return redirect('portofolio')->with('pesan', 'Data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Porto::where('id', $id)->delete();
        return redirect('portofolio')->with('pesan', 'Data berhasil dihapus');
    }
}
