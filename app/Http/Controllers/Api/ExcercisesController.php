<?php

namespace App\Http\Controllers\Api;
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
             selectRaw('count(id) as number_of_orders, excercise_ID')
            ->groupBy('excercise_ID')
            ->havingBetween('number_of_orders', [1, 2])
            ->get();
        }

        if ($activite = 1) {
            $view=  excercises::
            selectRaw('count(id) as number_of_orders, excercise_ID')
           ->groupBy('excercise_ID')
           ->havingBetween('number_of_orders', [3, 5])
           ->get();


        }

        if ($activite = 2) {
            $view=  excercises::
            selectRaw('count(id) as number_of_orders, excercise_ID')
           ->groupBy('excercise_ID')
           ->havingBetween('number_of_orders', [6, 10])
           ->get();
       }



        if ($activite = 3) {
            $view=  excercises::
            selectRaw('count(id) as number_of_orders, excercise_ID')
           ->groupBy('excercise_ID')
           ->havingBetween('number_of_orders', [1, 7])
           ->get();
       }



          return view('view',compact(var_name:'view'));

    }


 }
