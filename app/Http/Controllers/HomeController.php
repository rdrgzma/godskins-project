<?php

namespace App\Http\Controllers;
use App\Skin;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
       {
           $skins= Skin::all();
           return view('home', compact('skins'));
       }
       public function faq(){

       }
}
