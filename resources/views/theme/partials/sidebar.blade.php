                    @php
                        use App\Models\Category;
                        use App\Models\Blog;

                        $sidebaercategory = Category::get();
                        $recentpost = Blog::latest()->take(3)->get();

                    @endphp

                    <!--sidebar start-->
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            @if ($sidebaercategory->count() > 0)
                                <aside class="single_sidebar_widget post_category_widget">
                                    <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
                                    <ul class="list cat-list">
                                        @foreach ($sidebaercategory as $category)
                                            <li>
                                                <a href="{{ route('theme.blogsByCategory', $category->id) }}"
                                                    class="d-flex">
                                                    <p>{{ $category->name }}</p>
                                                    <p>({{ $category->blogs->count() }})</p>

                                                </a>
                                            </li>
                                        @endforeach
                            @endif
                            </ul>
                            </aside>
                            <!------ Popular Post start ----->
                            @if ($recentpost->count() > 0)
                                <aside class="single_sidebar_widget popular_post_widget">
                                    <h3 class="widget_title" style="color: #2d2d2d;">Recent Blogs</h3>
                                    @foreach ($recentpost as $blog)
                                        <div class="media post_item">
                                            <img src="{{ asset("storage/blogs/$blog->image") }}" width="90px"
                                                alt="post">
                                            <div class="media-body">
                                                <a href="blog_details.html">
                                                    <h3 style="color: #2d2d2d;">{{ $blog->title }}</h3>
                                                </a>
                                                <p>{{ $blog->created_at->format('d M Y') }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </aside>
                            @endif
                            <!------ Popular Post end ----->
                            <!------ Newsletter start ----->
                            <aside class="single_sidebar_widget newsletter_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4>
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form action="{{ route('subscriber.store') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'"
                                            placeholder='Enter email' required>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Subscribe</button>
                                </form>
                            </aside>

                            <!--end newsletter-->
                        </div>
                    </div>
