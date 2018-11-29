<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class PlaceController extends Controller
{
    function index() {
        $places = Place::paginate(8);

        $js_data = [];

        return view('place.index', compact('places'));
    }


    function show (Place $place) {
        $disabled = true;
        return view('place.show', compact(
            'place',
            'disabled'
        ));
    }

    
}
