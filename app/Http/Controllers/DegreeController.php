<?php

namespace App\Http\Controllers;

use App\Models\Degree;
use Illuminate\Http\Request;

use Filament\Tables\Table;

class DegreeController extends Controller
{



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $degrees=Degree::all();

        return $degrees;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name'=>'required|unique:degrees|max:50',
            'duration'=>'required',
        ]);

        $degree=Degree::create([
            'name'=>$request->name,
            'duration'=>$request->duration,
        ]);

        return $degree;
    }

    /**
     * Display the specified resource.
     */
    public function show(Degree $degree)
    {
        return $degree;
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
    public function update(Degree $degree, Request $request)
    {
        $request -> validate([
            'name'=>'required|max:50|unique:degrees,name,'.$degree->id,
            'duration'=>'required',
        ]);

        $degree->update($request->all());

        return $degree;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Degree $degree)
    {
        $degree->delete();
        return 'The degree was removed';
    }
}
