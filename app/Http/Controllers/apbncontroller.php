<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apbncontroller extends Controller
{
    
    public function prices()
    {

        return view('price');
    }

    public function contacts()
    {

        return view('contact');
    }

    public function homee()
    {

        return view('home');
    }

    public function orders()
    {

        return view('order');
    }

    public function drawing()
    {

        return view('drawings');
    }

    public function orders2()
    {

        return view('order2');
    }

    public function orders3()
    {

        return view('order3');
    }

    public function orders4()
    {

        return view('order4');
    }

}
