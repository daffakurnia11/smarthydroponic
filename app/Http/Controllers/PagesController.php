<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Output;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('guest.index', [
            'title'     => 'Homepage',
            'newest'    => Article::orderBy('published_at', 'DESC')->limit(4)->get(),
        ]);
    }

    public function monitoring()
    {
        return view('guest.monitoring', [
            'title'     => 'Live Monitoring'
        ]);
    }

    public function article()
    {
        return view('guest.article', [
            'title'     => 'Hidroponic Articles',
            'newest'    => Article::orderBy('published_at', 'DESC')->limit(4)->get(),
            'articles'  => Article::orderBy('published_at', 'DESC')->get()
        ]);
    }
}
