<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContectController extends Controller
{
    public function index(){
    	return view ('contect');
    } 
    public function book(){
    	return view ('prodect');
    }
}
