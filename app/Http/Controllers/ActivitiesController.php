<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    /**
     * Display the activities page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('activities');
    }
}
