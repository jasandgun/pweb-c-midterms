<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Topics;
class HomeController extends Controller
{
    //
    public function homeview(){
        
        return view('home');
    }
}
