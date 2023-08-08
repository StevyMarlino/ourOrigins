<?php

namespace App\Providers;

use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $posts = Post::orderBy('created_at', 'desc')->where('status','PUBLISHED')->paginate(3);
            $categories = Category::orderBy('created_at', 'desc')->get();
             
            $view->with(['posts'=> $posts, 'categories' => $categories]);
        });
    }
}
