<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
       return view('index');
    }

    public function presentacion(){
        return view('presentacion');
    }

    public function beneficios(){
        return view('beneficios');
    }

    public function estudios_cientificos(){
        return view('estudios-cientificos');
    }

}
