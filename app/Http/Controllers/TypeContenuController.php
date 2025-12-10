<?php

namespace App\Http\Controllers;

use App\Models\TypeContenu;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TypeContenuController extends Controller
{
    public function index(): View
    {
        $type_contenus=TypeContenu::all();
        return view('type-contenus.index', compact('type_contenus'));
    }

    public function create(): View
    {
        return view('type-contenus.create');
    }

    public function store(Request $request)
    {
        TypeContenu::create($request->all());
        return redirect()->route('type-contenus.index');
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