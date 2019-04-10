<?php

namespace App\Http\Controllers;

use App\opol;
use Illuminate\Http\Request;
use App\Http\Requests\opu;

class OpolController extends Controller
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
    public function clear()
    {
        opol::truncate();

        return redirect('/generate/save/second');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(opu $request)
    {
       $std = new opol();
       $std->percentage = $request->percentage;
       $std->save();
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\opol  $opol
     * @return \Illuminate\Http\Response
     */
    public function show(opol $opol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\opol  $opol
     * @return \Illuminate\Http\Response
     */
    public function edit(opol $opol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\opol  $opol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, opol $opol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\opol  $opol
     * @return \Illuminate\Http\Response
     */
    public function destroy(opol $opol)
    {
        //
    }
}
