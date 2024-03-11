<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        // dd($articles);
        return view('articles.index', compact(
            'articles'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
        // dd($request);
        // Article::create([
        //     'name' => $request->name,
        //     'slug' => $request->slug,
        //  'context' => $request->context,
        //  'excerpt' => $request->excerpt
        // ]);
        // $articles = Article::all();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request ->validate([
            'title' => ['required', 'string'],
            'slug' => ['required', 'string', 'unique'],
            'context' => [ 'required', 'text'],
            'excerpt' => ['required', 'text'],
        ]);
        Article::create([
            'title' => $request->title,
          'slug' => $request->slug,
            'context' => $request->context,
            'excerpt' => $request->excerpt
        ]);
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $article)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);
        $article = Article::find($id);
        $article->update([
            'title' => $request->title,
          'slug' => $request->slug,
           'context' => $request->context,
           'excerpt' => $request->excerpt
        ]);
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        Article::find($id)->delete();
        return redirect()->route('articles.index');
    }
}
