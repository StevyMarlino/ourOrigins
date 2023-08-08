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
                        <a href="{{ route('details', $post->slug) }}">
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