<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
	public function turumaki(Request $request)
	{
		return view('main.turumaki');
	}
	public function titosedai(Request $request)
	{
		return view('main.titosedai');
	}
}
