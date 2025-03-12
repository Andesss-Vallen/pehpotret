<?php

namespace App\Http\Controllers;

use App\Models\TimFoto;
use Illuminate\Http\Request;

class TimFotoController extends Controller
{
    public function index()
    {
        $timFotos = TimFoto::all();
        return view('tim_foto.index', compact('timFotos'));
    }

    public function create()
    {
        return view('tim_foto.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_tfoto' => 'required',
            'status_tfoto' => 'required|boolean',
            'bvia_tfoto' => 'required'
        ]);

        TimFoto::create($request->all());

        return redirect()->route('tim_foto.index');
    }

    public function show(TimFoto $timFoto)
    {
        return view('tim_foto.show', compact('timFoto'));
    }

    public function edit(TimFoto $timFoto)
    {
        return view('tim_foto.edit', compact('timFoto'));
    }

    public function update(Request $request, TimFoto $timFoto)
    {
        $request->validate([
            'nama_tfoto' => 'required',
            'status_tfoto' => 'required|boolean',
            'bvia_tfoto' => 'required'
        ]);

        $timFoto->update($request->all());

        return redirect()->route('tim_foto.index');
    }

    public function destroy(TimFoto $timFoto)
    {
        $timFoto->delete();
        return redirect()->route('tim_foto.index');
    }
}
