<?php

namespace App\Http\Controllers\services;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreexcercisesRequest;
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

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreexcercisesRequest $request)
    // {
    //     //
    //     excercises::create([

    //         'excercise_ID'=> $request->excercise_ID,
    //         'Name'=> $request->Name,
    //         'Type'=> $request->Type,
    //         'Time'=> $request->Time,
    //         'Sets'=> $request->Sets,

    //         ]);
    //         return redirect()->back()->with(['success' => 'تم اضافه العرض بنجاح ']);

    // }

    /**
     * Display the specified resource.
     */
    public function show(excercises $excercises)
    {
        //

           $view=  excercises::select(
            'excercise_ID',
        'Name',
        'Type',
        'Time',
        'Sets',) ->paginate(PAGINATION_COUNT);



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
