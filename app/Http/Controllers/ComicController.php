<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    //index
    public function index()
    {
        return view('comics.index');
    }
    
    //show
    public function show()
    {
        return view('comics.show');
    }

    //create
    public function create()
    {
        return view('comics.create');
    }
}
