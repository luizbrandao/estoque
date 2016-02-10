<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;

use estoque\Http\Requests;
use estoque\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index()
    {
        //
        return view('home');
    }
}
