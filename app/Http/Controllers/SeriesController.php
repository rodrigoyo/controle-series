<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    function index(Request $request)
    {
        var_dump($request->query());
        $series = [
            'Grey\'s Anatomy',
            'Lost',
            'Agents of SHIELD',
            'Agents of SHIELD 2'
        ];

        $html = "<ul>";
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        $html .= "</ul>";

        return $html;
    }
}
