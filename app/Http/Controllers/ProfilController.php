<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class ProfilController extends Controller
{
    public function index()
    {
    	return view('app/profil/profil');
    }
}
