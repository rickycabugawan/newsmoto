<?php

namespace App\Providers;

use App\Article;
use App\Comment;
use Carbon\Carbon;
use App\FeaturedArticle;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $all_articles = Article::all()->sortByDesc('created_at');
        // $archive = $all_articles->unique('created_at')->format('M');

        $archives = $all_articles->unique(function ($item) { return $item['created_at']->format('M Y'); });

        $featured_articles_id = FeaturedArticle::pluck('article_id');
        // dd($articles);
        $featured_articles = Article::whereIn('id',$featured_articles_id)->latest()->get();
        
        $music_articles = Article::where('category','music')->latest()->take(4)->get();
        $sports_articles = Article::where('category','sports')->latest()->take(6)->get();
        $entertainment_articles = Article::where('category','entertainment')->latest()->take(5)->get();
        $business_articles = Article::where('category','business')->latest()->take(1)->get();
        $tech_articles = Article::where('category','tech')->latest()->take(3)->get();
        $movies_articles = Article::where('category','movies')->latest()->take(1)->get();
        $lifestyle_articles = Article::where('category','lifestyle')->latest()->take(6)->get();

        $most_popular_articles = Article::with('comment')->get()->sortByDesc(function($article){
            return $article->comment->count();
        })->take(5);
        
        $most_recent_articles = Article::latest()->take(5)->get();
        $most_recent_comments = Comment::latest()->take(5)->get();

        $random_posts = Article::all()->random(5);

        View::share(compact(
            'featured_articles',
            'music_articles',
            'entertainment_articles',
            'sports_articles',
            'business_articles',
            'tech_articles',
            'movies_articles',
            'lifestyle_articles',
            'most_popular_articles',
            'most_recent_articles',
            'most_recent_comments',
            'random_posts',
            'archives'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
