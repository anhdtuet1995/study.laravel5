<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use App\Http\Requests;
use App\Http\Requests\CheckArticlesRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    //
    public function index(){
    	$articles = Articles::latest('created_at')->where('created_at', '<=', Carbon::now())->get();
    	return view("pages.articles")->with("articles", $articles);
    }

    public function create(){
    	return view("pages.create");
    }

    public function store(CheckArticlesRequest $request){
    	$dulieu_tu_input = $request->all();
    	Articles::create($dulieu_tu_input);
    	return redirect('articles');
    }

    public function edit($id){
        $article = Articles::findOrFail($id);
        return view('pages.edit', compact('article'));
    }

    public function update($id, CheckArticlesRequest $request){
        $articles = Articles::findOrFail($id);
        $articles->update($request->all());
        return redirect('articles');
    }
}

