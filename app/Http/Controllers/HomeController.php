<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class HomeController extends Controller
{
    public function index(){

        $movie = Movie::all();

        var_dump($movie);
        return view('home');
    }
}
