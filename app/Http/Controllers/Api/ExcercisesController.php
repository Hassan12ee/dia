<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreexcercisesRequest;
use App\Models\diabtes_record;
use App\Models\excercises;
use Illuminate\Http\Request;


class ExcercisesController extends Controller
{
    use ApiResponseTrait;
    public function index(){

        $posts = excercises::collection(excercises::get());
        return $this->apiResponse($posts,message:'',status:200
    );
  }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('entrytest');
    }


    public function show( $id)
    {

        $activite = diabtes_record::where('patient_id', $id)->value('activity_level');

        if ($activite == 1) {
            $view=  excercises::
            whereBetween('excercise_ID', [1, 2])
            ->get();
            if($view){
                return $this->apiResponse($view, message: 'ok', status: 200);        }
     else{
         return $this->apiResponse(null,message:'notfound',status:404);
     }
        }else if ($activite == 2) {
            $view=  excercises::
            whereBetween('excercise_ID', [3, 5])
           ->get();
           if($view){
            return $this->apiResponse($view, message: 'ok', status: 200);
    }
 else{
     return $this->apiResponse(null,message:'notfound',status:404);
 }

        }

        else if ($activite == 3) {
            $view=  excercises::
            whereBetween('excercise_ID', [6, 10])
           ->get();
           if($view){
            return $this->apiResponse($view, message: 'ok', status: 200);
    }
 else{
     return $this->apiResponse(null,message:'notfound',status:404);
 }
       }



       else if ($activite == 4) {
            $view=  excercises::

            whereBetween('excercise_ID', [1, 7])
           ->get();
           if($view){
            return $this->apiResponse($view, message: 'ok', status: 200);    }
 else{
     return $this->apiResponse(null,message:'notfound',status:404);
 }
       }



       else{
        return $this->apiResponse(null,message:'notfound',status:404);

    }


 }
}
