<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Output;
use App\Models\Plant;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $count = Plant::count();
        $skip = 4;
        $limit = $count - $skip;
        // return Plant::skip($skip)->take($limit)->get();

        return view('guest.index', [
            'title'         => 'Homepage',
            'newest'        => Article::where('published_at', '!=', NULL)->orderBy('published_at', 'DESC')->limit(4)->get(),
            'first_plant'   => Plant::take($skip)->get(),
            'other_plant'   => $count > $skip ? Plant::skip($skip)->take($limit)->get() : null,
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
            'newest'    => Article::where('published_at', '!=', NULL)->orderBy('published_at', 'DESC')->limit(4)->get(),
            'articles'  => Article::where('published_at', '!=', NULL)->orderBy('published_at', 'DESC')->get()
        ]);
    }
}
