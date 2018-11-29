<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Place;
use App\Http\Controllers\Controller;

class PlaceController extends Controller
{
    function index() {
        $places = Place::all();

        $js_data = [];

        foreach ($places as $place) {
            $js_data[] = [
                'latitude' => $place->latitude,
                'longitude' => $place->longitude
            ];
        }

        return response()->json($js_data);
    }

    
}
