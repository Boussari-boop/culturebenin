<?php

namespace App\Http\Controllers;

use App\Models\Parle;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ParlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() :view
    {
         $parles=Parle::all();
         return view('parles.index', data: compact('parles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function  create()
    {
        return view('parles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Parle::create($request->all());
        return redirect()->route('parles.index');
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


