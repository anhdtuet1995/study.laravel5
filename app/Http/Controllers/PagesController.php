<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function aboutme(){
    	return view('pages.aboutme', ['name' => 'Samantha']);
    }

    public function contact(){
    	return view('pages.contact');
    }
}
