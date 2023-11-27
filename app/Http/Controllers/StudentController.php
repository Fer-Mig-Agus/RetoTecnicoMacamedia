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
        $students=Student::all();
        return $students;
    }

    /**
     * Show the form for screating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name'=>'required|max:50',
            'last_name'=>'required|max:50',
            'dni'=>'required|unique:students',
            'phone'=>'required|unique:students',
            'active'=>'required',
            'bundle'=>'required|unique:students',
            'degree_id'=>'required',
        ]);

        $degree=Student::create([
            'name'=>$request->name,
            'last_name'=>$request->last_name,
            'dni'=>$request->dni,
            'phone'=>$request->phone,
            'bundle'=>$request->bundle,
            'active'=>$request->active,
            'degree_id'=>$request->degree_id,
        ]);

        return $degree;
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {   
        return $student;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Student $student,Request $request)
    {
        
        $request -> validate([
            'name'=>'required|max:50',
            'last_name'=>'required|max:50',
            'dni'=>'required|unique:students,dni,'.$student->id,
            'phone'=>'required|unique:students,phone,'.$student->id,
            'active'=>'required',
            'bundle'=>'required|unique:students,bundle,'.$student->id,
            'degree_id'=>'required',
        ]);

        $student->update($request->all());
        return  $student;


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return 'The student was removed';
    }
}
