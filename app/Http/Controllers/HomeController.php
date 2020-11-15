<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index()
    {
    	return view('app/home/home');
    }

    public function materi()
    {
    	return view('app/home/materi');	
    }
}
