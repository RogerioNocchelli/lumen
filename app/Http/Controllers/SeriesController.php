<?php

namespace App\Http\Controllers;

use App\Series;
use Illuminate\Http\Request;

class SeriesController
{
    public function index()
    {
        return Series::all();
    }

    public function createSeries(Request $resquest)
    {
        var_dump($resquest);
        exit;

    }
}
