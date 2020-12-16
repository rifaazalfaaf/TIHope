<?php

namespace App\Http\Controllers\Materis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class MateriController extends Controller
{
    //
    function list(){ 
    $data= Http::get('http://127.0.0.1:8000/api/materi')->json();

    return view('materi',['data' => $data ]);
    }
}
