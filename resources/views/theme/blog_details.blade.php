    @extends('theme.master')
    @section('title', '-Comments')
    @section('content')
        @include('theme.partials.hero', ['title' => 'Comments'])
        <!--? Blog Area Start -->
        <section class="blog_area single-post-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        @if ($blog->comments->count() > 0)
                            <div class="comments-area">
                                <h4>{{ $blog->comments->count() }} Comments</h4>
                                @foreach ($blog->comments as $comment)
                                    <div class="comment-list">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="assets/img/blog/comment_1.png" alt="">
                                                </div>
                                                <div class="desc">
                                                    <p class="comment">{{ $comment->comment }}
                                                    </p>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <h5>
                                                                <a href="#">{{ $comment->name }}</a>
                                                            </h5>
                                                            <p class="date">{{ $comment->created_at->format('d m Y') }}
                                                            </p>
                                                        </div>
                                                        <div class="reply-btn">
                                                            <a href="#" class="btn-reply text-uppercase">reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="comment-form">
                            <h4>Leave a Reply</h4>
                            <form class="form-contact comment_form" action="{{ route('comments.store') }}" id="commentForm"
                                method="post">
                                @csrf
                                <input type="hidden" value="{{ $blog->id }}" name="blog_id">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            @if (session('CommentCreateStatus'))
                                                <div class="alert alert-success">
                                                    {{ session('CommentCreateStatus') }}
                                                </div>
                                            @endif
                                            <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                                placeholder="Write Comment"></textarea>
                                            @error('message')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="name" id="name" type="text"
                                                placeholder="Name">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="email" id="email" type="email"
                                                placeholder="Email">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post
                                        Comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @include('theme.partials.sidebar')
                </div>
            </div>
        </section>
    @endsection

    <!-- Blog Area End -->
