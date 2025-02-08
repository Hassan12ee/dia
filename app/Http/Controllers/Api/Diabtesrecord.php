<?php

namespace App\Http\Controllers\Api;
use App\Http\Requests\Storediabtes_recordRequest;
use App\Http\Resources\diabtesrecords;
use App\Models\diabtes_record;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use app\http\Requests\Updatediabtes_recordRequest;

use Illuminate\Http\Request;

class Diabtesrecord extends Controller
{
    use ApiResponseTrait;
    public function index(){

        $posts = diabtesrecords::collection(diabtes_record::get());
        return $this->apiResponse($posts,message:'',status:200
    );
  }
  public function show($id){

   $post=diabtes_record::find($id);

   if($post){
           return $this->apiResponse(new diabtesrecords($post),message:'',status:200);
   }
else{
    return $this->apiResponse(null,message:'notfound',status:404);
}


  }

  public function store(Storediabtes_recordRequest $request){

   $validator=validator::make($request->all(),[
    'patient_id' => 'required|max:100',
    'gender' => 'required|in:male,female',
    'age' => 'required|max:13',
    'hypertension'=> 'required|in:0,1',
    'heart_disease'=> 'required|in:0,1',
    'smoking_history'=> 'required|in:never,No Info,current smoking,former,ever,not current',
    'bmi'=> 'required',
    'HbA1c_level'=> 'required',
    'blood_glucose_level'=> 'required|max:255',
    'activity_level'=>'required|in:0,1,2,3',
    'diabetes'=> 'required|in:0,1',
   ]);
   if ($validator->fails()) {
    return $this->apiResponse(null,$validator->errors(),400);}


    $post = diabtes_record::create($request->all());

    if($post){
        return $this->apiResponse(new diabtesrecords($post),message:'saved succesully',status:201);
    }
    else{
        return $this->apiResponse(null,message:'the record not save',status:400);
    }

  }
public function update(storediabtes_recordRequest $request,$id ){
    $validator=validator::make($request->all(),[
        'patient_id' => 'required|max:100',
        'gender' => 'required|in:male,female',
        'age' => 'required|max:13',
        'hypertension'=> 'required|in:0,1',
        'heart_disease'=> 'required|in:0,1',
        'smoking_history'=> 'required|in:never,No Info,current smoking,former,ever,not current',
        'bmi'=> 'required',
        'HbA1c_level'=> 'required',
        'blood_glucose_level'=> 'required|max:255',
        'activity_level'=>'required|in:0,1,2,3',
        'diabetes'=> 'required|in:0,1',
       ]);
       if ($validator->fails()) {
        return $this->apiResponse(null,$validator->errors(),400);}

        $post=diabtes_record::find($id);

       $post->update($request->all());

        if($post){
            return $this->apiResponse(new diabtesrecords($post),message:'updated succesully',status:201);
        }
        else{
            return $this->apiResponse(null,message:'the record not updated',status:400);
        }
}
public function destroy($id){

}

}
