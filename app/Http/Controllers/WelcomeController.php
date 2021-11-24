<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
    public function index(){
        $name='Rozo';
        return view('welcome', compact('name'));
    }
    
}