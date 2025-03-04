<?php

namespace App\Http\Controllers\services;

use App\Models\diabtes_record;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storediabtes_recordRequest;
use App\Http\Requests\Updatediabtes_recordRequest;

class DiabtesRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('entrytest');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storediabtes_recordRequest $request)
    {
        //BMI=weight / (height)^2

        // $request ->BMI =$request->weight/ $request->height^2;
        diabtes_record::create([

            'patient_id'=> $request->patient_id,
            'gender'=> $request->gender,
            'age'=> $request->age,
            'hypertension'=> $request->hypertension,
            'heart_disease'=> $request->heart_disease,
            'smoking_history'=> $request->smoking_history,
            'bmi'=> $request->bmi,
            'HbA1c_level'=> $request->HbA1c_level,
            'blood_glucose_level'=> $request->blood_glucose_level,
            'diabetes'=> $request->diabetes,
            ]);
            return redirect()->back()->with(['success' => 'تم اضافه العرض بنجاح ']);

    }

    /**
     * Display the specified resource.
     */
    public function show(diabtes_record $diabtes_record)
    {
        //

          $view=  diabtes_record::select(

            'id',
            'patient_id',
            'gender',
            'age',
            'hypertension',
            'heart_disease',
            'smoking_history',
            'bmi',
            'HbA1c_level',
            'blood_glucose_level',
            'diabetes',) ->paginate(PAGINATION_COUNT);



          return view('view_hotels',compact(var_name:'view'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $record_id)
    {
        //

        $view = diabtes_record::where("record_id",$record_id)->first();
        if (!$view)
        return redirect()->back();

        $view = diabtes_record::where("record_id",$record_id)->first();

        //
        return view('hotels_update', compact('view'));
    }
    public function Update(Storediabtes_recordRequest $request, $record_id)
    {
        // validtion

        // chek if
        $offer = diabtes_record::where("record_id",$record_id)->first();

        if (!$offer)
            return redirect()->back();

        //update data

        $offer->update($request->all());

        return redirect()->back()->with(['success' => ' تم التحديث بنجاح ']);


    }
    public function destroy(diabtes_record $diabtes_record)
    {
        //
    }
}
