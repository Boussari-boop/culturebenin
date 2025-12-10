<?php

namespace App\Http\Controllers;

use App\Models\Langue;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LanguesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() :view
    {
         $langues=Langue::all();
         return view('langues.index', data: compact('langues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function  create()
    {
        return view('langues.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Langue::create($request->all());
        return redirect()->route('langues.index');
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

