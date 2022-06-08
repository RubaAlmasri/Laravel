@extends('master')

@section('content')



<div class="container px-4 px-lg-5 my-5" style="margin-top: 10%; border: 1px solid; border-radius: 50px;">
    <div class="row gx-4 gx-lg-5 align-items-center">
        <div class="col-md-6">
            <img src="{{ url('public/images/'.$data->movie_imag) }}" alt="Image" style="height: 500px; width: 400px; margin: 10%; float: left; margin-right: 20%;">
        </div>
        <div class="col-md-6">
            <h2><b>{{$data->movie_name}}</b></h2>
            <h5>{{$data->movie_gener}}</h5>
            <p>{{$data->movie_description}}</p>
            <form method="get" action="/movies" style="margin: 3%;">
                @csrf
                <button type="submit" class="btn btn-dark">Back</button>
            </form>
        </div>
    </div>
</div>


@endsection