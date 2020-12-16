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

    public function upload_materi()
    {
        return view('app/home/uploadmateri'); 
    }    

    public function download()
    {
    	return view('app/home/download');	
    }
    function list()
    { 
        $data= Http::get('http://127.0.0.1:8000/api/materi')->json();
    
        return view('materis',['data' => $data ]);
    }
}
