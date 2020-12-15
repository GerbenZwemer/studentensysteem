<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = \App\Models\Student::all();
        return view('studenten', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'roepnaam' => 'required',
            'achternaam' => 'required',
            'voorletters' => 'required',
            'officielenaam' => 'required',
            'postcode' => 'required',
            'straat' => 'required',
            'huisnummer' => 'required',
            'woonplaats' => 'required',
            'opleiding' => 'required',
            'klas' => 'required',
        ]);
        \App\Models\Student::create($request->all());
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('resultaten', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = \App\Models\Student::findOrFail($id);
        return view('edit', compact('student'));       
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
            'roepnaam' => 'required',
            'achternaam' => 'required',
            'voorletters' => 'required',
            'officielenaam' => 'required',
            'postcode' => 'required',
            'straat' => 'required',
            'huisnummer' => 'required',
            'woonplaats' => 'required',
            'opleiding' => 'required',
            'klas' => 'required'
        ]);
        $update = [
            'roepnaam' => $request->roepnaam, 
            'voorvoegsel' => $request->voorvoegsel, 
            'achternaam' => $request->achternaam, 
            'voorletters' => $request->voorletters, 
            'officielenaam' => $request->officielenaam, 
            'postcode' => $request->postcode, 
            'straat' => $request->straat, 
            'huisnummer' => $request->huisnummer, 
            'toevoeging' => $request->toevoeging, 
            'woonplaats' => $request->woonplaats,
            'opleiding' => $request->opleiding, 
            'klas' => $request->klas
        ];
        Student::where('id',$id)->update($update);
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Models\Student::where('id',$id)->delete();
        return redirect('students');        
    }
}
