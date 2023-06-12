<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index() : View
    {
        $data = [
            'posts' => Post::orderBy('created_at', 'desc')->where('status','PUBLISHED')->paginate(3),
            'alls6' => Post::orderBy('created_at', 'desc')->where('status','PUBLISHED')->paginate(6),
            'alls' => Post::orderBy('created_at', 'desc')->where('status','PUBLISHED')->get(),
            'categories' => Category::orderBy('created_at', 'desc')->get(),
        ];
        return view('index', $data);
    }

    public function about() : View
    {
        return view('about');
    }
}
