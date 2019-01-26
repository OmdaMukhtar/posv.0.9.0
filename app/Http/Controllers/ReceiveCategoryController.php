<?php

namespace App\Http\Controllers;

use App\ReciveCatogery;
use Illuminate\Http\Request;

class ReceiveCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('receive.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReciveCatogery  $reciveCatogery
     * @return \Illuminate\Http\Response
     */
    public function show(ReciveCatogery $reciveCatogery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReciveCatogery  $reciveCatogery
     * @return \Illuminate\Http\Response
     */
    public function edit(ReciveCatogery $reciveCatogery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReciveCatogery  $reciveCatogery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReciveCatogery $reciveCatogery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReciveCatogery  $reciveCatogery
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReciveCatogery $reciveCatogery)
    {
        //
    }
}
