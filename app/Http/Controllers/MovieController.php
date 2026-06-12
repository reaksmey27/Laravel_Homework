<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //raw sql
        // $movies = DB::select('SELECT * FROM movies');
        // dd($movies);

        //Query Builder
        // $movies = DB::table('movies')->get();
        // dd($movies);

        //Eloquent ORM
        $movies = Movie::all();
        // dd($movies);
        return view('movies.list',compact('movies'));
    }
}
