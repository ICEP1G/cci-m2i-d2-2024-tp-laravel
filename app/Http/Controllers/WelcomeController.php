<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpKernel\Controller\ControllerResolver as Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

}