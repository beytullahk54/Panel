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


class AdminController extends Controller
{
    //Kullanıcı girişine yönlendirme yapılır
    public function __construct() 
    {
        $this->middleware( 'auth' );
    }


    public function index()
    {

	    return view('home.index');
    }


}
