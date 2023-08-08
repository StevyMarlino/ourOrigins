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
            'alls6' => Post::orderBy('created_at', 'desc')->where('status','PUBLISHED')->paginate(6),
            'alls' => Post::orderBy('created_at', 'desc')->where('status','PUBLISHED')->get(),
        ];
        return view('index', $data);
    }

    public function about() : View
    {
        return view('about');
    }

    public function details($slug)
    {
        $data = [
            'details' => Post::where('slug', $slug)->first(),
        ];
        return view('blog-single', $data);
    }
}
