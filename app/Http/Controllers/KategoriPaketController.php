<?php

namespace App\Http\Controllers;

use App\Models\KategoriPaket;
use Illuminate\Http\Request;

class KategoriPaketController extends Controller
{
    public function index()
    {
        $kategoriPakets = KategoriPaket::all();
        return view('kategori_paket.index', compact('kategoriPakets'));
    }

    public function create()
    {
        return view('kategori_paket.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kpaket' => 'required'
        ]);

        KategoriPaket::create($request->all());

        return redirect()->route('kategori_paket.index');
    }

    public function show(KategoriPaket $kategoriPaket)
    {
        return view('kategori_paket.show', compact('kategoriPaket'));
    }

    public function edit(KategoriPaket $kategoriPaket)
    {
        return view('kategori_paket.edit', compact('kategoriPaket'));
    }

    public function update(Request $request, KategoriPaket $kategoriPaket)
    {
        $request->validate([
            'nama_kpaket' => 'required'
        ]);

        $kategoriPaket->update($request->all());

        return redirect()->route('kategori_paket.index');
    }

    public function destroy(KategoriPaket $kategoriPaket)
    {
        $kategoriPaket->delete();
        return redirect()->route('kategori_paket.index');
    }
}
