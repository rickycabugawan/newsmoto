<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use App\FeaturedArticle;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Request $id)
    {
        
    }

    public function showArticle($id)
    {
        $this_article = Article::find($id);

        $related_articles = Article::where('category',$this_article->category)->where('id',"!=",$this_article->id)->get()->random(3);
        // dd($related_articles);

         return view('article',compact('this_article','related_articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }

    public function listHomeItems()
    {
         return view('homepage');
    }

    public function listCategory($category)
    {   

        // dump($category);
        $category_articles = Article::where('category',$category)->latest()->get();
         return view('articles-list',compact('category','category_articles'));
    }

    public function listSearch(Request $request)
    {   
            $search_articles = Article::where('title', 'LIKE', "%$request->search%")->latest()->get();
        $search = $request->search;
        $word = 'with query';
         return view('articles-search',compact('search','search_articles','word'));
    }

    public function listArchive(Request $request)
    {   
        $year = date('Y',strtotime($request->archive));
        $month = date('m',strtotime($request->archive));
        $search_articles = Article::whereYear('created_at', '=', $year)
              ->whereMonth('created_at', '=', $month)->orderByDesc('created_at')
              ->get();
        $search = $request->archive;
        $word = 'from';
         return view('articles-search',compact('search','search_articles','word'));
    }

    public function randomArticle()
    {   
        $all_articles = Article::all();
        $random_article = $all_articles->random();

         return redirect("/articles/$random_article->id");
    }
}
