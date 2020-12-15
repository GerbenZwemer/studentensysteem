<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ResultatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'vak_id' => 'required',
            'resultaat' => 'required', 
            'student_id' => 'required'
        ]);
        \App\Models\Resultaten::create($request->all());
        return redirect()->route('students.show', $request->student_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student_id = $id;
        $vakken = \App\Models\Vak::all();
        return view('adResult', compact('vakken','student_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resultaat = \App\Models\Resultaten::findOrFail($id);
        return view('editResult', compact('resultaat'));       
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
            'resultaat' => 'required',
        ]);
        $update = ['resultaat' => $request->resultaat];
        \App\Models\Resultaten::where('id',$id)->update($update);
        return redirect()->route('students.show', $request->student_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Models\Resultaten::where('id',$id)->delete();
        //return redirect('resultaten', compact('students'));     
        return back();
    }   
}
