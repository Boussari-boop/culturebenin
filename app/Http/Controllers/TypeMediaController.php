<?php

namespace App\Http\Controllers;

use App\Models\TypeMedia;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TypeMediaController extends Controller
{
    public function index(): View
    {
        $type_medias=TypeMedia::all();
        return view('type-medias.index', compact('type_medias'));
    }

    public function create(): View
    {
        return view('type-medias.create');
    }

    public function store(Request $request)
    {
        TypeMedia::create($request->all());
        return redirect()->route('type-medias.index');
    }

    public function show(string $id)
    {
        // 
    }

    public function edit(string $id)
    {
        // 
    }

    public function update(Request $request, string $id)
    {
        // 
    }

    public function destroy(string $id)
    {
        //
    }
}