<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{
    public function index()
    {
    	return view('app/login/login');
    }
}
