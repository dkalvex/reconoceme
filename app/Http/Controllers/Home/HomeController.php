<?php namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
	public function index(Request $request)
	{
		return view('home/home');
	}

}