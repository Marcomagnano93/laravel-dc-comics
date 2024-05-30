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
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    //create
    public function create()
    {
        return view('comics.create');
    }

    //store
    public function store(Request $request)
    {
        $form_new_comic = $request->all();
        
        $new_comic = Comic::create($form_new_comic);

        return redirect()->route('comics.show', $new_comic);
    }
}
