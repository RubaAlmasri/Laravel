<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Movie::all();
        return view('movies', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMovieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMovieRequest $request, Movie $inputs)
    {

        $name = $request->file('img')->getClientOriginalName();

        $path = $request->file('img')->move(public_path('public/images'), $name);

        $inputs->movie_name = $request->post('name');
        $inputs->movie_description = $request->post('desc');
        $inputs->movie_gener = $request->post('gener');
        $inputs->movie_imag = $name;
        $inputs->save();
        // $inputs = Movie::create($request->all());

        return redirect()->route('movies.index')->with('success', 'Movie Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        $data = Movie::find($movie->id);
        return view('show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $data = Movie::find($movie->id);
        return view('/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMovieRequest  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        $movie->exists = true;

        if ($request->file('img')) {
            $name = $request->file('img')->getClientOriginalName();

            $path = $request->file('img')->move(public_path('public/images'), $name);

            $movie->movie_imag = $name;
        }

        $movie->movie_name = $request->post('name');
        $movie->movie_description = $request->post('desc');
        $movie->movie_gener = $request->post('gener');
        // $movie->movie_imag = $name;

        $movie->save();

        return redirect()->route('movies.index')->with('success', 'Movie Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $m = Movie::find($movie->id);
        $m->delete();
        return redirect()->back()->with('status', 'Movie Deleted Successfully');
    }
}
