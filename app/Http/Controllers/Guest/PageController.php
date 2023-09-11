<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Model
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('home', compact('movies'));
        
    }

    public function singleMovie($index){
        $movie = Movie::find($index);
        return view('singleMovie', compact('movie'));
        
    }

}
