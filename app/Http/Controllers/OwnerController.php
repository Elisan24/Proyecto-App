<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaseController extends Controller
{
    public function index(){
        return "hola mundo";
    }

    public function create(){
        return view('welcome');
    }

}
