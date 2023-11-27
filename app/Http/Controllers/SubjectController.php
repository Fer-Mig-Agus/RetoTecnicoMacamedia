<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects=Subject::all();
        return $subjects;
    }

    /**
     * Show the form for creating a new resource.
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
            'name'=>'required|unique:subjects|max:50',
            'duration'=>'required',
            'class_hours'=>'required',
            'degree_id'=>'required',
        ]);

        $subject=Subject::create([
            'name'=>$request->name,
            'duration'=>$request->duration,
            'class_hours'=>$request->class_hours,
            'degree_id'=>$request->degree_id,
            'status_id'=>2,
        ]);

        return $subject;
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        return $subject;
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
    public function update(Subject $subject, Request $request)
    {
        

        $request -> validate([
            'name'=>'required|max:50|unique:degrees,name,'.$subject->id,
            'duration'=>'required',
            'class_hours'=>'required',
            'degree_id'=>'required',
            'status_id'=>'required',
        ]);

        $subject->update($request->all());
        return $subject;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {   
        $subject->delete();
        return 'The subject was removed';
    }
}
