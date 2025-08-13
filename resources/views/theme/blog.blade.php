@extends('theme.master')
@section('title', '-Blog')
@section('content')
    @include('theme.partials.hero', ['title' => 'Company insights'])

    <!--? Blog Area Start-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @if (count($blogs) > 0)
                            @foreach ($blogs as $blog)
                                <article class="blog_item">
                                    <a href="{{ route('theme.blog_details', $blog->id) }}') }}">
                                        <div class="blog_item_img">
                                            <img class="card-img rounded-0" src="{{ asset('storage/blogs/' . $blog->image) }}"
                                                alt="">
                                            <a href="#" class="blog_item_date">
                                                <h3>{{ $blog->created_at->format('d') }}</h3>
                                                <p>{{ $blog->created_at->format('M') }}</p>
                                            </a>
                                        </div>
                                    </a>
                                    <div class="blog_details">
                                        <a class="d-inline-block" href="{{ route('theme.blog_details', $blog->id) }}">
                                            <h2 class="blog-head" style="color: #2d2d2d;">{{ $blog->title }}</h2>
                                        </a>
                                        <p>{{ $blog->description }}</p>
                                        <ul class="blog-info-link">
                                            <li><a href="#"><i class="fa fa-user"></i>{{ $blog->user->name }}</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                        </ul>
                                    </div>
                                </article>
                            @endforeach
                        @endif
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                {{ $blogs->render('pagination::bootstrap-4') }}

                            </ul>
                        </nav>
                    </div>
                </div>
                @include('theme.partials.sidebar')

            </div>
        </div>
    </section>
    <!----- Blog Area End ---->
@endsection
