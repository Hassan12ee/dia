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
        <th scope="col">height</th>
        <th scope="col">weight</th>
        <th scope="col">number_of_pregnacies</th>
        <th scope="col">glucose_level</th>
        <th scope="col">skin_thickness</th>
        <th scope="col">activity_level</th>
        <th scope="col">insulin_level</th>
        <th scope="col">BMI</th>
        <th scope="col">outcome</th>
        <th scope="col">Age</th>
        <th scope="col">opeartion</th>
    </tr>
    </thead>
    <tbody>


    @foreach($view as $offer)
        <tr>
            <td scope="row">{{$offer -> record_id}}</td>
            <td>{{$offer -> patient_id}}</td>
            <td>{{$offer -> height}}</td>
            <td>{{$offer -> weight}}</td>
            <td>{{$offer -> number_of_pregnacies}}</td>
            <td>{{$offer -> glucose_level}}</td>
            <td>{{$offer -> skin_thickness}}</td>
            <td>{{$offer -> activity_level}}</td>
            <td>{{$offer -> insulin_level}}</td>
            <td>{{$offer -> BMI}}</td>
            <td>{{$offer -> outcome}}</td>
            <td>{{$offer -> Age}}</td>
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
