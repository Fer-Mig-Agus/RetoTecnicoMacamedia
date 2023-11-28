<?php

namespace App\Http\Controllers;

use App\Models\Historical;
use Illuminate\Http\Request;

class HistoricalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historicals = Historical::all();
        return $historicals;
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
        $validate = $request->validate([
            'date' => 'required',
            'student_id'=>'required',
            'subject_id'=>'required',
            'status_id'=>'required',
        ]);

        $historical=Historical::create([
            'date'=>$request->date,
            'student_id'=>$request->student_id,
            'subject_id'=>$request->subject_id,
            'status_id'=>$request->status_id,
        ]);

        return $historical;
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Historical $historical)
    {   
        return $historical;
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
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
