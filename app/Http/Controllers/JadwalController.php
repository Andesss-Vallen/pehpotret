<?php

namespace App\Http\Controllers;

use App\Models\CsPehpotret;
use App\Models\JadwalPehpotret;
use App\Models\PaketPehpotret;
use App\Models\TimFoto;
use App\Models\TimVideo;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwalPehpotrets = JadwalPehpotret::all();
        return view('jadwal_pehpotret.index', compact('jadwalPehpotrets'));
    }

    public function create()
    {
        $timVideos = TimVideo::all();
        $timFotos = TimFoto::all();
        $csPehpotrets = CsPehpotret::all();
        $paketPehpotrets = PaketPehpotret::all();

        return view('jadwal_pehpotret.create', compact('timVideos', 'timFotos', 'csPehpotrets', 'paketPehpotrets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_jpehpotret' => 'required',
            'brand_jpehpotret' => 'required',
            'tanggal_jpehpotret' => 'required|date',
            'keterangan_jpehpotret' => 'required',
            'id_tvideo' => 'required|exists:tim_videos,id_tvideo',
            'id_foto' => 'required|exists:tim_fotos,id_tfoto',
            'id_cspehpotret' => 'required|exists:cs_pehpotrets,id_cspehpotret',
            'id_pkpehpotret' => 'required|exists:paket_pehpotrets,id_pkpehpotret'
        ]);

        JadwalPehpotret::create($request->all());

        return redirect()->route('jadwal_pehpotret.index');
    }

    public function show(JadwalPehpotret $jadwalPehpotret)
    {
        return view('jadwal_pehpotret.show', compact('jadwalPehpotret'));
    }

    public function edit(JadwalPehpotret $jadwalPehpotret)
    {
        $timVideos = TimVideo::all();
        $timFotos = TimFoto::all();
        $csPehpotrets = CsPehpotret::all();
        $paketPehpotrets = PaketPehpotret::all();

        return view('jadwal_pehpotret.edit', compact('jadwalPehpotret', 'timVideos', 'timFotos', 'csPehpotrets', 'paketPehpotrets'));
    }

    public function update(Request $request, JadwalPehpotret $jadwalPehpotret)
    {
        $request->validate([
            'nama_jpehpotret' => 'required',
            'brand_jpehpotret' => 'required',
            'tanggal_jpehpotret' => 'required|date',
            'keterangan_jpehpotret' => 'required',
            'id_tvideo' => 'required|exists:tim_videos,id_tvideo',
            'id_foto' => 'required|exists:tim_fotos,id_tfoto',
            'id_cspehpotret' => 'required|exists:cs_pehpotrets,id_cspehpotret',
            'id_pkpehpotret' => 'required|exists:paket_pehpotrets,id_pkpehpotret'
        ]);

        $jadwalPehpotret->update($request->all());

        return redirect()->route('jadwal_pehpotret.index');
    }

    public function destroy(JadwalPehpotret $jadwalPehpotret)
    {
        $jadwalPehpotret->delete();
        return redirect()->route('jadwal_pehpotret.index');
    }
}
