<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    //
    public function index(){
    	$articles = Articles::all();
    	return view("pages.articles")->with("articles", $articles);
    }

    public function create(){
    	return view("page.create");
    }
}

