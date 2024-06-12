<?php

namespace App\Http\Controllers;

use App\Models\clients;
use App\Http\Requests\StoreclientsRequest;
use App\Http\Requests\UpdateclientsRequest;
use App\Models\workout;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('clients.index', [
            'clients' => clients::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreclientsRequest $request)
    {
        $validated = $request->validated();

        //create the slug
        $validated['slug'] = \Str::slug($validated['name']);

        clients::create($validated);

        return redirect()->route('clients.index')
            ->with('flash.banner', 'client created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(clients $client)
    {
        return view('clients.show', [
            'clients' => $client
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(clients $client)
    {
return view('clients.edit', [
            'clients' => $client
        ]);
        $validated = $request->validated();
        //create the slug
        $validated['slug'] = \Str::slug($validated['name']);

        //$client::update($validated);

        return redirect()->route('clients.index')
            ->with('flash.banner', 'client edited successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateclientsRequest $request,  $client)
    {
    $validated = $request->validated();

        //create the slug
        $validated['slug'] = \Str::slug($validated['name']);

        //$client::update($validated);

        return redirect()->route('clients.index')
            ->with('flash.banner', 'client created successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(clients $client)
    {
        $model = $client;

        $model->delete();

        //set the banner status to danger
        session()->flash('flash.bannerStyle', 'danger');

        return redirect()->route('clients.index')
            ->with('flash.banner', 'clients' . $model->name . 'deleted successfully');
    }
}
