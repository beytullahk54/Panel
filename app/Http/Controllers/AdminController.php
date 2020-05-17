<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
