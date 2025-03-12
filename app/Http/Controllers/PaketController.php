<?php

namespace App\Http\Controllers;

use App\Models\KategoriPaket;
use App\Models\PaketPehpotret;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        $paketPehpotrets = PaketPehpotret::all();
        return view('paket_pehpotret.index', compact('paketPehpotrets'));
    }

    public function create()
    {
        $kategoriPakets = KategoriPaket::all();
        return view('paket_pehpotret.create', compact('kategoriPakets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pkpehpotret' => 'required',
            'nama_kpaket' => 'required|exists:kategori_pakets,id_kpaket'
        ]);

        PaketPehpotret::create($request->all());

        return redirect()->route('paket_pehpotret.index');
    }

    public function show(PaketPehpotret $paketPehpotret)
    {
        return view('paket_pehpotret.show', compact('paketPehpotret'));
    }

    public function edit(PaketPehpotret $paketPehpotret)
    {
        $kategoriPakets = KategoriPaket::all();
        return view('paket_pehpotret.edit', compact('paketPehpotret', 'kategoriPakets'));
    }

    public function update(Request $request, PaketPehpotret $paketPehpotret)
    {
        $request->validate([
            'nama_pkpehpotret' => 'required',
            'nama_kpaket' => 'required|exists:kategori_pakets,id_kpaket'
        ]);

        $paketPehpotret->update($request->all());

        return redirect()->route('paket_pehpotret.index');
    }

    public function destroy(PaketPehpotret $paketPehpotret)
    {
        $paketPehpotret->delete();
        return redirect()->route('paket_pehpotret.index');
    }
}
