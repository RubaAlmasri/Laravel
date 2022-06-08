@extends('master')

@section('content')


<div class="container" style="margin-top: 2%; border: 1px solid; border-radius: 50px;">
    <div class="row align-items-stretch no-gutters contact-wrap">
        <form class="mb-5" method="post" action="/movies" enctype="multipart/form-data">
            <h2 style="text-align:center ; margin-top: 5%;">Add Movie</h2>
            @csrf
            <div class="row" style="padding-left: 10%; padding-right: 10%; padding-top: 5%;">
                <div class="col-md-12 form-group ">
                    <b><label for="name">Movie name</label></b>
                    <input type="text" class="@error('name') is-invalid @enderror form-control" id="name" name="name" required>
                </div>
                <div class="col-md-12 form-group">
                    <b><label for="desc">Movie description</label></b>
                    <textarea class="form-control" rows="5" name="desc" id="desc" required></textarea>
                </div>

                <div class="col-md-12 form-group">
                    <b><label for="gener">Movie year</label></b>
                    <input type="number" min="1900" max="2022" class="@error('gener') is-invalid @enderror form-control" name="gener" id="gener" required>
                </div>
                <div class="col-md-12 form-group">
                    <b><label for="img">Movie image</label></b>
                    <input type="file" class="form-control-file " accept="image/*" name="img" id="img" required>
                </div>
                <div class="col-md-12 form-group ">
                    <input type="submit" value="Add" class="btn btn-primary rounded-3 py-2 px-4 mb-3 ">
                </div>
            </div>
        </form>
    </div>
</div>


@endsection