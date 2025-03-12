<?php

namespace App\Http\Controllers;

use App\Models\CsPehpotret;
use Illuminate\Http\Request;

class CsController extends Controller
{
    public function index()
    {
        $csPehpotrets = CsPehpotret::all();
        return view('cs_pehpotret.index', compact('csPehpotrets'));
    }

    public function create()
    {
        return view('cs_pehpotret.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_cspehpotret' => 'required'
        ]);

        CsPehpotret::create($request->all());

        return redirect()->route('cs_pehpotret.index');
    }

    public function show(CsPehpotret $csPehpotret)
    {
        return view('cs_pehpotret.show', compact('csPehpotret'));
    }

    public function edit(CsPehpotret $csPehpotret)
    {
        return view('cs_pehpotret.edit', compact('csPehpotret'));
    }

    public function update(Request $request, CsPehpotret $csPehpotret)
    {
        $request->validate([
            'nama_cspehpotret' => 'required'
        ]);

        $csPehpotret->update($request->all());

        return redirect()->route('cs_pehpotret.index');
    }

    public function destroy(CsPehpotret $csPehpotret)
    {
        $csPehpotret->delete();
        return redirect()->route('cs_pehpotret.index');
    }
}
