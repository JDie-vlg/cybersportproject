<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;

class NewsController
{
    public function index(){
        News::all();
        //$new->category = ;
        return view('frontend.main', [
            'news'=>News::all(),
            ]
        );
    }

    public function show($id)
    {
        return view('frontend.news', [
            'news'=>News::all(),
        ]);
    }
}
