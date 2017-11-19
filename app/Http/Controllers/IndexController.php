<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filial;

class IndexController extends Controller
{
    public function index(){
        return view('index',['filials'=>Filial::all()]);
    }
}
