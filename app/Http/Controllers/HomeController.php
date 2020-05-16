<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ogrenci;
use App\ogrenci_ders;
use App\User;
use App\ders;
use App\education;
use Illuminate\Support\Facades\URL;
use Session;


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
    
    public function hosgeldiniz()
    {

	    return view('Anasayfa.hosgeldiniz');
    }


    public function index()
    {

	    return view('home.index');
    }


}
