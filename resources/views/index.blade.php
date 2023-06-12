@extends('layouts.app')
@section('content')
    <section class="site-section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme home-slider">
                        @forelse ($posts as $post)
                            <div>
                                <a href="blog-single.html" class="a-block d-flex align-items-center height-lg"
                                    style="background-image: url({{ asset(Voyager::image($post->image)) }}); ">
                                    <div class="text half-to-full">
                                        <div class="post-meta">
                                            <span class="category"> {{ $post->category->name }} </span>
                                            <span class="mr-2">{{ $post->created_at->format('F d, Y') }} </span> &bullet;
                                        </div>
                                        <h3>{{ $post->title }}</h3>
                                        <p>
                                            {{ $post->excerpt }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <div>
                                <div class="text half-to-full">
                                    <p>
                                        {{ __('Not data Post') }}
                                    </p>
                                </div>
                            </div>
                        @endforelse

                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($alls6 as $post)
                    <div class="col-md-6 col-lg-4">
                        <a href="blog-single.html" class="a-block d-flex align-items-center height-md"
                            style="background-image: url({{ asset(Voyager::image($post->image)) }}); ">
                            <div class="text">
                                <div class="post-meta">
                                    <span class="category">{{ $post->category->name }}</span>
                                    <span class="mr-2">{{ $post->created_at->format('F d, Y') }} </span> &bullet;
                                </div>
                                <h3>{{ $post->excerpt }}</h3>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-md-6 col-lg-4">

                        <div class="text half-to-full">
                            <p>
                                {{ __('Not data Post') }}
                            </p>
                        </div>
                    </div>
                @endforelse

            </div>
        </div>
    </section>

    <section class="site-section py-sm">
        <div class="container">
            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">

                    <div class="row mb-5 mt-5">
                        <div class="col-md-12">
                            <h2 class="mb-4">{{ __('Last Posts') }}</h2>
                        </div>
                        <div class="col-md-12">
                            @forelse ($alls as $posted)
                                <div class="post-entry-horzontal">
                                    <a href="blog-single.html">
                                        <div class="image element-animate" data-animate-effect="fadeIn"
                                            style="background-image: url({{ asset(Voyager::image($posted->image)) }});">
                                        </div>
                                        <span class="text">
                                            <div class="post-meta">
                                                <span class="category"> {{ $posted->category->name }} </span>
                                                <span class="mr-2">{{ $post->created_at->format('F d, Y') }}</span>
                                                &bullet;
                                            </div>
                                            <h2>
                                                {{ $posted->excerpt }}
                                            </h2>
                                        </span>
                                    </a>
                                </div>
                            @empty
                                <div class="post-entry-horzontal">

                                    <div class="text half-to-full">
                                        <p>
                                            {{ __('Not data Post') }}
                                        </p>
                                    </div>

                                </div>
                            @endforelse

                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 sidebar">
                    <div class="sidebar-box search-form-wrap">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control" id="s"
                                    placeholder="Type a keyword and hit enter">
                            </div>
                        </form>
                    </div>

                    <div class="sidebar-box">
                        <h3 class="heading">Popular Posts</h3>
                        <div class="post-entry-sidebar">
                            <ul>
                                @forelse ($posts as $post)
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset(Voyager::image($post->image)) }}" alt="Image placeholder"
                                                class="mr-4">
                                            <div class="text">
                                                <h4> {{ $post->title }} </h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">{{ $post->created_at->format('F d, Y') }}</span>
                                                    &bullet;

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @empty
                                    {{ __('Not data Post') }}
                                @endforelse

                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-box">
                        <h3 class="heading">Categories</h3>
                        <ul class="categories">
                            @forelse ($categories as $category)
                                <li>
                                    <a href="#">{{ $category->name }}
                                        <span>
                                            ({{ $category->posts->count() }})
                                        </span>
                                    </a>
                                </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
