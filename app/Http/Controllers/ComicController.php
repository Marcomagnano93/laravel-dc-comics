<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    //index
    public function index()
    {

        $comics = Comic::all();

        return view('comics.index', compact('comics'));
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

    //store
    public function store()
    {
        dump('stai prendendo i dati dal form create');
    }
}
