<?php

namespace App\Http\Controllers;

use App\Models\Contenu;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContenusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() :view
    {
         $contenus=Contenu::all();
         return view('contenus.index', data: compact('contenus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function  create()
    {
        return view('contenus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Contenu::create($request->all());
        return redirect()->route('contenus.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

