<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     *
     */
    public function index()
    {
        return view('view.index');
    }

    public function getOffer()
    {
        return view('view.offer');
    }
}
