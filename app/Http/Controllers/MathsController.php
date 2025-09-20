<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathsController extends Controller
{
    public function autumn()
    {
        return view('br.yeargroups.EYFS.y0.subjects.maths.autumn.index');
    }
}