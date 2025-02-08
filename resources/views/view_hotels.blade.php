@extends('layouts.app')
@section('content')
<section class="mt-5">


@if(Session::has('success'))

    <div class="alert alert-success mt-5">
           {{Session::get('success')}}
    </div>
    @endif


@if(Session::has('error'))
     <div class="alert alert-danger">
         {{Session::get('error')}}
     </div>
@endif

<table class="table table-light table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">patient_id</th>
        <th scope="col">gender</th>
        <th scope="col">age</th>
        <th scope="col">hypertension</th>
        <th scope="col">heart_disease</th>
        <th scope="col">smoking_history</th>
        <th scope="col">bmi</th>
        <th scope="col">HbA1c_level</th>
        <th scope="col">blood_glucose_level</th>
        <th scope="col">diabetes</th>
        <th scope="col">opeartion</th>
    </tr>
    </thead>
    <tbody>


    @foreach($view as $offer)
        <tr>
            <td scope="row">{{$offer -> record_id}}</td>
            <td>{{$offer -> patient_id}}</td>
            <td>{{$offer -> gender}}</td>
            <td>{{$offer -> age}}</td>
            <td>{{$offer -> hypertension}}</td>
            <td>{{$offer -> heart_disease}}</td>
            <td>{{$offer -> smoking_history}}</td>
            <td>{{$offer -> bmi}}</td>
            <td>{{$offer -> HbA1c_level}}</td>
            <td>{{$offer -> blood_glucose_level}}</td>
            <td>{{$offer -> diabetes}}</td>
            <td>
                <a href="{{url('admin/hotels/update/'. $offer-> record_id)}}" class="btn btn-success"> update</a>
                {{-- <a href="{{route('offers.delete',$offer -> id)}}" class="btn btn-danger"> delete</a> --}}
             </td>

        </tr>
    @endforeach

    </tbody>



    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif


</table>
<div class="d-flex justify-content-center">
    {!!  $view -> links() !!}
    </div>
</section>
@endsection
