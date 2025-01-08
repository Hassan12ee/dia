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
        <th scope="col">excercise_ID</th>
        <th scope="col">Name</th>
        <th scope="col">Type</th>
        <th scope="col">Time</th>
        <th scope="col">Sets</th>
        <th scope="col">del</th>


    </tr>
    </thead>
    <tbody>


    @foreach($view as $offer)
        <tr>
            <td scope="row">{{$offer ->excercise_ID}}</td>
            <td>{{$offer ->Name}}</td>
            <td>{{$offer ->Type}}</td>
            <td>{{$offer ->Time}}</td>
            <td>{{$offer ->Sets}}</td>

            <td>
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
