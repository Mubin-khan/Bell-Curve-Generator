<?php

namespace App\Http\Controllers;

use App\opol;
use App\Mubin;
use Illuminate\Http\Request;
use App\Http\Requests\raju;

class MubinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Mubin::all();
        return view('frontview.save.save',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Mubin::truncate();

        return redirect('/generate/save/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(raju $request)
    {
        
        $student = new Mubin();
        $student->registraion_num = $request->reg_num;   
        $student->marks = $request->mark;
        $student->save();

        return redirect()->back();
    }

   

    /**
     * Display the specified resource.
     *
     * @param  \App\Mubin  $mubin
     * @return \Illuminate\Http\Response
     */
    public function show(Mubin $mubin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mubin  $mubin
     * @return \Illuminate\Http\Response
     */
    public function edit(Mubin $mubin,$id)
    {
        $students = Mubin::find($id);
        return view('editStudent',compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mubin  $mubin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Mubin::find($id);
        $student->registraion_num = $request->reg_num;   
        $student->marks = $request->mark;
        $student->update();

        return redirect('/generate/save');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mubin  $mubin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Mubin::find($id);
        $student->delete();
        return redirect()->back();
    }
    public function go(){
        return view('new');
    }
    public function sec(){
        $std = opol::all();
        return view('second1',compact('std'));
    }
}
