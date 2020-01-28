<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    //

    public function index(){
        return view('home');
    }

}
