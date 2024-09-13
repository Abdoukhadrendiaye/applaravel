<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produitcontroller extends Controller
{
    public function index(){
        return view("user");
    }
     public function create(){
        return view("create");
    }

}
