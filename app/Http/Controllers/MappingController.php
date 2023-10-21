<?php

namespace App\Http\Controllers;

use App\Models\Mapping;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMappingRequest;
use App\Http\Requests\UpdateMappingRequest;

class MappingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = \App\Models\Mapping::all();
        return view('mapping.all', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mapping.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMappingRequest $request)
    {
        $mapping = new \App\Models\Mapping;
        $mapping->slug = $request["slug"];
        $mapping->redirect = $request["redirect"];

        $mapping->save();

        return redirect("/mapping");
    }

    /**
     * Display the specified resource.
     */
    public function show(Mapping $mapping)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mapping $mapping)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMappingRequest $request, Mapping $mapping)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mapping $mapping)
    {
        //
    }

    public function handleRedirect(String $slug)
    {
        $mappings = \App\Models\Mapping::where('slug',  $slug)->get();
        if (count($mappings) < 1) {
            return abort(404);
        } else {
        return redirect($mappings[0]->redirect);
        }
    }
}
