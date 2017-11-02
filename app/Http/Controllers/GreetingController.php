<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function index()
	{
		$message = "Hello world.";
		return $message;//nu þarf eg að gera return view
	}
}
