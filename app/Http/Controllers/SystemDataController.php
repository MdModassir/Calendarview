<?php

namespace App\Http\Controllers;

use App\SystemData;
use App\Http\Requests\StoreSystemDataRequest;
use App\Http\Requests\UpdateSystemDataRequest;

class SystemDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.systemdata.index');
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
     * @param  \App\Http\Requests\StoreSystemDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSystemDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SystemData  $systemData
     * @return \Illuminate\Http\Response
     */
    public function show(SystemData $systemData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SystemData  $systemData
     * @return \Illuminate\Http\Response
     */
    public function edit(SystemData $systemData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSystemDataRequest  $request
     * @param  \App\SystemData  $systemData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSystemDataRequest $request, SystemData $systemData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SystemData  $systemData
     * @return \Illuminate\Http\Response
     */
    public function destroy(SystemData $systemData)
    {
        //
    }
}
