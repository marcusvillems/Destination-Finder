<?php

namespace App\Http\Controllers;

use App\Models\Stop;
use App\Models\Route;

class StopController extends Controller
{
    public function index()
    {
        $stops = Stop::all();
        return response()->json($stops);
    }

    public function destinations(Stop $stop)
    {
        $destinations = $stop->routes()->with('stops')->get()->pluck('stops')->flatten();
        return response()->json($destinations);
    }
}

