<!doctype html>
<html lang="en">

<head>
    <title>{{ setting('site.title') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('layouts.css')

<body>

    @include('layouts.head')

    @yield('content')

    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#f4b214" />
        </svg>
    </div>

    <footer class="site-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <h3>Paragraph</h3>
                    <p>
                        <img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid">
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, accusantium optio unde
                        perferendis eum illum voluptatibus dolore tempora, consequatur minus asperiores
                        temporibus reprehenderit.</p>
                </div>
                <div class="col-md-6 ml-auto">
                    <div class="row">
                        <div class="col-md-7">
                            <h3>Latest Post</h3>
                            <div class="post-entry-sidebar">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/img_6.jpg" alt="Image placeholder" class="mr-4">
                                            <div class="text">
                                                <h4>There’s a Cool New Way for Men to Wear Socks
                                                    and Sandals</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">March 15, 2018 </span>
                                                    &bullet;
                                                    <span class="ml-2"><span class="fa fa-comments"></span>
                                                        3</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/img_3.jpg" alt="Image placeholder" class="mr-4">
                                            <div class="text">
                                                <h4>There’s a Cool New Way for Men to Wear Socks
                                                    and Sandals</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">March 15, 2018 </span>
                                                    &bullet;
                                                    <span class="ml-2"><span class="fa fa-comments"></span>
                                                        3</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="images/img_4.jpg" alt="Image placeholder" class="mr-4">
                                            <div class="text">
                                                <h4>There’s a Cool New Way for Men to Wear Socks
                                                    and Sandals</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">March 15, 2018 </span>
                                                    &bullet;
                                                    <span class="ml-2"><span class="fa fa-comments"></span>
                                                        3</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <div class="mb-5">
                                <h3>Quick Links</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Adventure</a></li>
                                    <li><a href="#">Courses</a></li>
                                    <li><a href="#">Categories</a></li>
                                </ul>
                            </div>
                            <div class="mb-5">
                                <h3>Social</h3>
                                <ul class="list-unstyled footer-social">
                                    <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a>
                                    </li>
                                    <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a>
                                    </li>
                                    <li><a href="#"><span class="fa fa-instagram"></span>
                                            Instagram</a></li>
                                    <li><a href="#"><span class="fa fa-vimeo"></span> Vimeo</a></li>
                                    <li><a href="#"><span class="fa fa-youtube-play"></span>
                                            Youtube</a></li>
                                    <li><a href="#"><span class="fa fa-snapchat"></span> Snapshot</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This
                    template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#"
                        target="_blank">Our Origins</a>

                </div>
            </div>
        </div>
        <div id="whatsapp-widget" class="ww-right ww-normal ww-yes"><a target="_blank"
                href="https://wa.me/2376 55 39 6281/?text=Hi ," class="ww-text">{{ __('Need Helps ? Message Us') }}
                <div class="ww-arrow"></div>
            </a>
            <div class="ww-icon">
                <div><a class="ww-icon-link" target="_blank" href="https://wa.me/237670858799/?text=Hi ,">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                            <path
                                d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z"
                                fill-rule="evenodd"></path>
                        </svg>
                    </a></div>
            </div>
        </div>
    </footer>

    @include('layouts.script')
</body>
