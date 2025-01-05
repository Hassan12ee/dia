<?php

namespace App\Http\Controllers;

use App\Models\excercises;
use Illuminate\Http\Request;


class ExcercisesController extends Controller
{
    public function index()
    {
        $excercises = excercises::all();
        return view('excercises.index', compact('excercises'));
    }

    public function create()
    {
        return view('excercises.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:excercises',
            'age' => 'required|integer',

        ]);

        excercises::create($request->all());
        return redirect()->route('excercises.index')->with('success', 'excercises record added successfully');
    }

    public function show(excercises $excercises)
    {
        return view('excercises.show', compact('excercises'));
    }

    public function edit(excercises $excercises)
    {
        return view('excercises.edit', compact('excercises'));
    }

    public function update(Request $request, excercises $excercises)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required|integer',
            'glucose_level' => 'required|numeric',
            'date_recorded' => 'required|date',
        ]);

        $excercises->update($request->all());
        return redirect()->route('excercises.index')->with('success', 'excercises record updated');
    }

    public function destroy(excercises $excercises)
    {
        $excercises->delete();
        return redirect()->route('excercises.index')->with('success', 'excercises record deleted');
    }
}
