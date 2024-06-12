<?php

namespace App\Http\Controllers;

use App\Models\coaches;
use App\Http\Requests\StorecoachesRequest;
use App\Http\Requests\UpdatecoachesRequest;


class CoachesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('coaches.index', [
            'coaches' => coaches::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('coaches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecoachesRequest $request)
    {
        $validated = $request->validated();

        //create the slug
        $validated['slug'] = \Str::slug($validated['name']);

        coaches::create($validated);

        return redirect()->route('coaches.index')
            ->with('flash.banner', 'coach profile created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(coaches $coaches)
    {
        return view('coaches.show', [
            'coaches' => $coaches
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(coaches $coaches)
    {
        return view('coaches.edit', [
            'coaches' => $coaches
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecoachesRequest $request, coaches $coaches)
    {
        $coaches->update($request->validated());

        return redirect()->route('coaches.index')
            ->with('flash.banner', 'coach profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(coaches $coaches)
    {
        $model = $coaches;

        $model->delete();

        //set the banner status to danger
        session()->flash('flash.bannerStyle', 'danger');

        return redirect()->route('coaches.index')
            ->with('flash.banner', 'coaches' . $model->name . 'deleted successfully');
    }
}
