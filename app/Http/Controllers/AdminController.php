<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Redirect;
use Alert;


class AdminController extends Controller
{
	public function __construct()
	{

		$this->middleware('auth');

	}
	public function index()
	{
		return view('Admin.Anasayfa');

	}










}
