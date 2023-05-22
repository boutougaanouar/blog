<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\Commentaire;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function store(Request $request, $article)
    {
        // ----------------------------------------------- wrong method (it works) ----------------------------------------------------- //

        // $comment = Comment::create(['article_id' => $article, 'user' => Auth::user()->name, 'content' => $request->input('comment')]);
        // $article = Article::find($article);
        // $article->comments()->save($comment);

        // -------------------------------------------------------- right method  ------------------------------------------------------ //
        $Commentaire = new Commentaire();
        $Commentaire->content = $request->comment;
        $Commentaire->user = Auth::user()->name;

        $article = Article::find($article);
        $Commentaire->article()->associate($article);

        $Commentaire->save();

        return redirect()->route('articles.show', ['article' => $article->id]);
    }



}