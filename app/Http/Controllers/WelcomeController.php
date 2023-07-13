<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function bienvenue(){
        return view('welcome');
    } 


    public function apropos(){
        return view('about');
    }
} 
