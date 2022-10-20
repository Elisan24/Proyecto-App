<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index(){
        return "Ya jaloooooo propietario";
    }

    public function create(){
        return view('welcome');
    }

}
