<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(){
        return "Ya jaloooooo propiedadaaaad";
    }
    public function create(){
        return view('welcome');
    }
}
