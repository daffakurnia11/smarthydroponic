<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Carbon\Carbon;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.article.index', [
            'title'     => 'Article Lists',
            'articles'  => Article::orderBy('created_at', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create', [
            'title'     => 'Add Article'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'         => 'required',
            'description'   => 'required',
            'image'         => 'required|mimes:jpg,png,jpeg|max:2048',
            'paper'         => 'required|mimes:pdf|max:5048',
        ]);
        $slug = SlugService::createSlug(Article::class, 'slug', $request->title);
        $validated['slug'] = $slug;

        if (isset($request->publish)) {
            $validated['published_at'] = Carbon::now();
        }
        $imageFile = $slug . '-Image.' . $request->image->extension();
        $validated['image'] = $imageFile;
        $request->image->move(public_path('files/article/image'), $imageFile);

        $paperFile = $slug . '.' . $request->paper->extension();
        $validated['paper'] = $paperFile;
        $request->paper->move(public_path('files/article/paper'), $paperFile);

        Article::create($validated);

        return redirect('/admin/article')->with('message', "New article has been created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $article->update([
            'reader' => $article->reader + 1
        ]);
        return redirect("/files/article/paper/$article->paper");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.article.edit', [
            'title'     => 'Edit Article',
            'article'   => $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title'         => 'required',
            'description'   => 'required',
            'image'         => 'nullable|mimes:jpg,png,jpeg|max:2048',
            'article'       => 'nullable|mimes:pdf|max:5048',
        ]);

        if ($request->title != $article->title) {
            $slug = SlugService::createSlug(Article::class, 'slug', $request->title);
            $validated['slug'] = $slug;
        } else {
            $slug = $article->slug;
        }

        if ($request->image) {
            unlink(public_path("files/article/image/$article->image"));

            $imageFile = $slug . '-Image.' . $request->image->extension();
            $validated['image'] = $imageFile;
            $request->image->move(public_path('files/article/image'), $imageFile);
        }

        if ($request->paper) {
            unlink(public_path("files/article/paper/$article->paper"));

            $paperFile = $slug . '.' . $request->paper->extension();
            $validated['paper'] = $paperFile;
            $request->paper->move(public_path('files/article/paper'), $paperFile);
        }

        if ($request->publish) {
            $validated['published_at'] = Carbon::now();
        } else {
            $validated['published_at'] = null;
        }

        $article->update($validated);

        return redirect('/admin/article')->with('message', "The article has been updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        unlink(public_path("files/article/paper/$article->paper"));
        unlink(public_path("files/article/image/$article->image"));

        $article->delete();

        return redirect('/admin/article')->with('message', "The article has been deleted!");
    }
}
