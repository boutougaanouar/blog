<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function hme(){
        $article = Article::paginate(2);

        return view("articles.index",['article'=>$article]);

    }
    public function index()
    {
        $articles= Article::paginate(4);
        return view('articles.index',['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article=$request->validate([
            'title'=>'required|string|max:100',
            'content'=>'required|string|max:100',
            'publicatinDate'=>'date',
        ]);
        
        $article = new Article();
      
        $article->title = $request->title;
        $article->content = $request->content;
        $article->publication_date= $request->publication_date;
        $article->save();
        return redirect('articles');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::find($id);
        return view('articles.show',['article'=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);
        return view('articles.edit',['article'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->publication_date=$request->publication_date;
        $article->save();
        return redirect('articles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id);
        $article->delete($article);
        return redirect('/articles');
    }
    public function search(Request $request){
        $search = $request->search;
        $articles = Article::where('Title','like',"%$search%")->get();
        return view("articles.index",['articles'=>$articles]);
    }
}
