@extends ('master')

@section('content')

<form method="get" action="/movies/create" style="margin: 3%;">
    @csrf
    <button type="submit" class="btn btn-success">Add Movie</button>
</form>
@if ($message= Session::get('success'))
<div class="alert alert-success" role="alert">
    {{ $message }}
</div>
@elseif ($message= Session::get('status'))
<div class="alert alert-danger" role="alert">
    {{ $message }}
</div>
@endif
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Movie_name</th>
            <th scope="col">Movie_decription</th>
            <th scope="col">Movie_gener</th>
            <th scope="col">Movie_image</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->movie_name}}</td>
            <td>{{Str::limit($value->movie_description, 70)}}
                <form method="get" action="/movies/{{$value->id}}" style="display: inline-block;">
                    @csrf
                    <button type="submit" class="btn btn-link">See more</button>
                </form>
            </td>
            <td>{{$value->movie_gener}}</td>
            <td><img src="{{ url('public/images/'.$value->movie_imag) }}" alt="Image" style="height: 100px; width: 100px;"></td>
            <td>
                <form method="get" action="/movies/{{$value->id}}/edit" style="display: inline-block;">
                    @method('PUT')
                    @csrf
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
                <form method="POST" action="/movies/{{$value->id}}" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection