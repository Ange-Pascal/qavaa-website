<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommerceController extends Controller
{
    public function shop(){
        return view('marketplace/marketplace'); 
    }
}
