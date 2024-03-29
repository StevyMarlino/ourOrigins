@extends('layouts.app')
@section('content')
    <section class="site-section py-lg">
        <div class="container">
            <div class="row blog-entries">

                <div class="col-md-12 col-lg-8 main-content">
                    <h1 class="mb-4">{{ $details->title }}</h1>
                    <div class="post-meta">
                        <span class="category">{{ $details->category->name }}</span>
                        <span class="mr-2">{{ $details->created_at->format('F d, Y') }}</span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <div class="post-content-body">

                        {!! $details->body !!}
                    </div>
                    <div class="pt-5">
                        <p>Categories: <a href="#">{{ $details->category->name }}</a>
                    </div>
                    {{-- <div class="pt-5">
                                    <h3 class="mb-5">6 Comments</h3>
                                    <ul class="comment-list">
                                          <li class="comment">
                                                <div class="vcard">
                                                      <img src="images/person_1.jpg" alt="Image placeholder">
                                                </div>
                                                <div class="comment-body">
                                                      <h3>Jean Doe</h3>
                                                      <div class="meta">January 9, 2018 at 2:21pm</div>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Pariatur quidem laborum necessitatibus, ipsam impedit vitae
                                                            autem, eum officia, fugiat saepe enim sapiente iste iure!
                                                            Quam voluptas earum impedit necessitatibus, nihil?</p>
                                                      <p><a href="#" class="reply">Reply</a></p>
                                                </div>
                                          </li>
                                          <li class="comment">
                                                <div class="vcard">
                                                      <img src="images/person_1.jpg" alt="Image placeholder">
                                                </div>
                                                <div class="comment-body">
                                                      <h3>Jean Doe</h3>
                                                      <div class="meta">January 9, 2018 at 2:21pm</div>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Pariatur quidem laborum necessitatibus, ipsam impedit vitae
                                                            autem, eum officia, fugiat saepe enim sapiente iste iure!
                                                            Quam voluptas earum impedit necessitatibus, nihil?</p>
                                                      <p><a href="#" class="reply">Reply</a></p>
                                                </div>
                                                <ul class="children">
                                                      <li class="comment">
                                                            <div class="vcard">
                                                                  <img src="images/person_1.jpg"
                                                                        alt="Image placeholder">
                                                            </div>
                                                            <div class="comment-body">
                                                                  <h3>Jean Doe</h3>
                                                                  <div class="meta">January 9, 2018 at 2:21pm</div>
                                                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                        elit. Pariatur quidem laborum necessitatibus,
                                                                        ipsam impedit vitae autem, eum officia, fugiat
                                                                        saepe enim sapiente iste iure! Quam voluptas
                                                                        earum impedit necessitatibus, nihil?</p>
                                                                  <p><a href="#" class="reply">Reply</a></p>
                                                            </div>
                                                            <ul class="children">
                                                                  <li class="comment">
                                                                        <div class="vcard">
                                                                              <img src="images/person_1.jpg"
                                                                                    alt="Image placeholder">
                                                                        </div>
                                                                        <div class="comment-body">
                                                                              <h3>Jean Doe</h3>
                                                                              <div class="meta">January 9, 2018 at
                                                                                    2:21pm</div>
                                                                              <p>Lorem ipsum dolor sit amet, consectetur
                                                                                    adipisicing elit. Pariatur quidem
                                                                                    laborum necessitatibus, ipsam
                                                                                    impedit vitae autem, eum officia,
                                                                                    fugiat saepe enim sapiente iste
                                                                                    iure! Quam voluptas earum impedit
                                                                                    necessitatibus, nihil?</p>
                                                                              <p><a href="#" class="reply">Reply</a></p>
                                                                        </div>
                                                                        <ul class="children">
                                                                              <li class="comment">
                                                                                    <div class="vcard">
                                                                                          <img src="images/person_1.jpg"
                                                                                                alt="Image placeholder">
                                                                                    </div>
                                                                                    <div class="comment-body">
                                                                                          <h3>Jean Doe</h3>
                                                                                          <div class="meta">January 9,
                                                                                                2018 at 2:21pm</div>
                                                                                          <p>Lorem ipsum dolor sit amet,
                                                                                                consectetur adipisicing
                                                                                                elit. Pariatur quidem
                                                                                                laborum necessitatibus,
                                                                                                ipsam impedit vitae
                                                                                                autem, eum officia,
                                                                                                fugiat saepe enim
                                                                                                sapiente iste iure! Quam
                                                                                                voluptas earum impedit
                                                                                                necessitatibus, nihil?
                                                                                          </p>
                                                                                          <p><a href="#"
                                                                                                      class="reply">Reply</a>
                                                                                          </p>
                                                                                    </div>
                                                                              </li>
                                                                        </ul>
                                                                  </li>
                                                            </ul>
                                                      </li>
                                                </ul>
                                          </li>
                                          <li class="comment">
                                                <div class="vcard">
                                                      <img src="images/person_1.jpg" alt="Image placeholder">
                                                </div>
                                                <div class="comment-body">
                                                      <h3>Jean Doe</h3>
                                                      <div class="meta">January 9, 2018 at 2:21pm</div>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Pariatur quidem laborum necessitatibus, ipsam impedit vitae
                                                            autem, eum officia, fugiat saepe enim sapiente iste iure!
                                                            Quam voluptas earum impedit necessitatibus, nihil?</p>
                                                      <p><a href="#" class="reply">Reply</a></p>
                                                </div>
                                          </li>
                                    </ul>

                                    <div class="comment-form-wrap pt-5">
                                          <h3 class="mb-5">Leave a comment</h3>
                                          <form action="#" class="p-5 bg-light">
                                                <div class="form-group">
                                                      <label for="name">Name *</label>
                                                      <input type="text" class="form-control" id="name">
                                                </div>
                                                <div class="form-group">
                                                      <label for="email">Email *</label>
                                                      <input type="email" class="form-control" id="email">
                                                </div>
                                                <div class="form-group">
                                                      <label for="website">Website</label>
                                                      <input type="url" class="form-control" id="website">
                                                </div>
                                                <div class="form-group">
                                                      <label for="message">Message</label>
                                                      <textarea name="" id="message" cols="30" rows="10"
                                                            class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                      <input type="submit" value="Post Comment" class="btn btn-primary">
                                                </div>
                                          </form>
                                    </div>
                              </div> --}}
                </div>

                @include('side-box')
            </div>
        </div>
    </section>
@endsection
