<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function firstPage()
    {
        return view('first_page');
    }

    public function secondPage()
    {
        return view('second_page');
    }

    public function thirdPage()
    {
        return view('third_page');
    }

    public function fourthPage()
    {
        return view('fourth_page');
    }

    public function fifthPage()
    {
        return view('fifth_page');
    }
}
