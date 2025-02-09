<?php

namespace App\Http\Controllers\services;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreexcercisesRequest;
use App\Models\diabtes_record;
use App\Models\excercises;
use Illuminate\Http\Request;


class ExcercisesController extends Controller
{
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


    public function show(excercises $excercises,$id)
    {
        //
        $activite = diabtes_record::where('patient_id', $id)->firstorfail()->value('activity_level');

        if ($activite = 0) {
            $view=  excercises::
            whereBetween('excercise_ID', [1, 2])
            ->get();
        }else if ($activite = 1) {
            $view=  excercises::
            whereBetween('excercise_ID', [3, 5])
           ->get();


        }

        else if ($activite = 2) {
            $view=  excercises::
            whereBetween('excercise_ID', [6, 10])
           ->get();
       }



       else if ($activite = 3) {
            $view=  excercises::

            whereBetween('excercise_ID', [1, 7])
           ->get();
       }



          return view('view',compact(var_name:'view'));

    }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit( $record_id)
//     {
//         //

//         $view = diabtes_record::where("record_id",$record_id)->first();
//         if (!$view)
//         return redirect()->back();

//         $view = diabtes_record::where("record_id",$record_id)->first();

//         //
//         return view('hotels_update', compact('view'));
//     }
//     public function Update(Storediabtes_recordRequest $request, $record_id)
//     {
//         // validtion

//         // chek if
//         $offer = diabtes_record::where("record_id",$record_id)->first();

//         if (!$offer)
//             return redirect()->back();

//         //update data

//         $offer->update($request->all());

//         return redirect()->back()->with(['success' => ' تم التحديث بنجاح ']);


//     }
//     public function destroy(diabtes_record $diabtes_record)
//     {
//         //
//     }
 }
