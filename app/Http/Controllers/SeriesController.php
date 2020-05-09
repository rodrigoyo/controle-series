<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    function index(Request $request)
    {
        $series = [
            'Grey\'s Anatomy',
            'Lost',
            'Agents of SHIELD',
            'Agents of SHIELD 2'
        ];

        return view('series.index', compact('series'));
    }
}
