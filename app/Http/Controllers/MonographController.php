<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMonographRequest;
use App\Http\Requests\UpdateMonographRequest;
use App\Models\Monograph;

class MonographController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMonographRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMonographRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Monograph  $monograph
     * @return \Illuminate\Http\Response
     */
    public function show(Monograph $monograph)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Monograph  $monograph
     * @return \Illuminate\Http\Response
     */
    public function edit(Monograph $monograph)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMonographRequest  $request
     * @param  \App\Models\Monograph  $monograph
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMonographRequest $request, Monograph $monograph)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monograph  $monograph
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monograph $monograph)
    {
        //
    }
}
