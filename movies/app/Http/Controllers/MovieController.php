<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Http\Resources\MovieResource;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        


        $movie = MovieResource::collection(Movie::all());


        return $movie;
        

        
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request)
    {
        $request->validated();

        $movies = Movie::create(
             $request->only(['title', 'director', 'image', 'duration', 'releaseDate', 'genre'])
        );


        return new MovieResource($movies);




        
        
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $movie = Movie::find($id);


        return new MovieResource($movie);
    }

    
    /**
     * Update the specified resource in storage.
     */
    public function update( UpdateMovieRequest $request,  $id)
    {
        $request->validated();

        $movie = Movie::find($id);

        if(!$movie){
            return response('eror 404', 404);
        }

        $movie->update($request->only('title', 'director', 'image', 'duration', 'releaseDate', 'genre'));

        return new MovieResource($movie);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $movie = Movie::find($id);

        if(!$movie){
            return response('invalid page 404', 404);
        }

        $movie->delete();
         

    }
}
