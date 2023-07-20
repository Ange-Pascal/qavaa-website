<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function afficher(){
        return view('contacts/contacts');
    }
}
