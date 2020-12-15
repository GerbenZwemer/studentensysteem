<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vakken = \App\Models\Vak::all();
        return view('vak', ['vakken' => $vakken]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createvak');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'vak_naam' => 'required'
        ]);
        \App\Models\Vak::create($request->all());
        return redirect()->route('vakken.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vak = \App\Models\Vak::findOrFail($id);
        return view('editvak', compact('vak'));       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'vak_naam' => 'required'
        ]);
        $update = [
            'vak_naam' => $request->vak_naam
        ];
        \App\Models\Vak::where('id',$id)->update($update);
        return redirect('vakken');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Models\Vak::where('id',$id)->delete();
        return redirect('vakken');        
    }
}
