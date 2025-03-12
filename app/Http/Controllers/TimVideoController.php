<?php

namespace App\Http\Controllers;

use App\Models\TimVideo;
use Illuminate\Http\Request;

class TimVideoController extends Controller
{
    public function index()
    {
        $timVideos = TimVideo::all();
        return view('tim_video.index', compact('timVideos'));
    }

    public function create()
    {
        return view('tim_video.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_tvideo' => 'required',
            'status_tvideo' => 'required|boolean',
            'bvia_tvideo' => 'required'
        ]);

        TimVideo::create($request->all());

        return redirect()->route('tim_video.index');
    }

    public function show(TimVideo $timVideo)
    {
        return view('tim_video.show', compact('timVideo'));
    }

    public function edit(TimVideo $timVideo)
    {
        return view('tim_video.edit', compact('timVideo'));
    }

    public function update(Request $request, TimVideo $timVideo)
    {
        $request->validate([
            'nama_tvideo' => 'required',
            'status_tvideo' => 'required|boolean',
            'bvia_tvideo' => 'required'
        ]);

        $timVideo->update($request->all());

        return redirect()->route('tim_video.index');
    }

    public function destroy(TimVideo $timVideo)
    {
        $timVideo->delete();
        return redirect()->route('tim_video.index');
    }
}
