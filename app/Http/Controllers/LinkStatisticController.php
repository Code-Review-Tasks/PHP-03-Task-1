<?php

namespace App\Http\Controllers;


use App\Models\Link;
use Illuminate\View\View;

class LinkStatisticController extends Controller
{

    public function index() : View
    {
        $statistics = Link::with("statistics")->get();
        return view("statistics.index", compact("statistics"));
    }
}
