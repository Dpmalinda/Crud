<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('Crud.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Crud.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $students = Student::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'age'=>$request->age,
            'telephone'=>$request->telephone,
        ]);
        return redirect()->route('Crud.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $detail = Student::find($id);
        return view('Crud.Edit', compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
            $student ->update([
            'name'=>$request->name,
            'address'=>$request->address,
            'age'=>$request->age,
            'telephone'=>$request->telephone,
        ]);
        return redirect()->route('Crud.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $dele = Student::find($id);
        $dele->delete();
        return redirect()->route('Crud.index');
    }
}
