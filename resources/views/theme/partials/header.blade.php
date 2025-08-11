                <header>
                    <!-- Header Start -->
                    <div class="header-area header-transparent">
                        <div class="main-header ">
                            <div class="header-bottom  header-sticky">
                                <div class="container-fluid">
                                    <div class="row align-items-center">
                                        <!-- Logo -->
                                        <div class="col-xl-2 col-lg-2">
                                            <div class="logo">
                                                <a href="{{ route('theme.index') }}"><img src="assets/img/logo/logo.png"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-xl-10 col-lg-10">
                                            <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                                <!-- Main-menu -->
                                                <div class="main-menu d-none d-lg-block">
                                                    <nav>
                                                        <ul id="navigation">
                                                            <li class="nav-link @yield('home-active')"><a
                                                                    href="{{ route('theme.index') }}">Home</a>
                                                            </li>
                                                            <li><a href="{{ route('theme.courses') }}">Courses</a></li>
                                                            <li><a href="{{ route('theme.about') }}">About</a></li>
                                                            @if (auth()->check())
                                                                <li><a href="#">Blog</a>
                                                                    <ul class="submenu">
                                                                        <li><a href="{{ route('theme.blog') }}">Blog</a>
                                                                        </li>
                                                                        <li><a
                                                                                href="{{ route('theme.blog_details', 1) }}">Blog
                                                                                Details</a>
                                                                        </li>
                                                                        <li><a href="{{ route('blogs.create') }}">Add
                                                                                New Bloge</a></li>
                                                                        <li><a href="#">Add New Course</a></li>
                                                                    </ul>
                                                                </li>
                                                            @endif
                                                            <li><a href="{{ route('theme.contact') }}">Contact</a></li>
                                                            <!-- Button -->
                                                            @if (!Auth::check())
                                                                <a href="{{ route('login') }}"
                                                                    class="btn header-btn">Login</a>
                                                            @else
                                                                <li class="nav-item submenu dropdown">
                                                                    <a href="#" class="nav-link dropdown-toggle"
                                                                        data-toggle="dropdown" role="button"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                        {{ Auth::user()->name }}
                                                                    </a>
                                                                    <ul class="dropdown-menu p-2"
                                                                        style="min-width: 150px;">
                                                                        <li class="mb-1">
                                                                            <a class="btn header-btn w-100"
                                                                                href="{{ route('blogs.my-blogs') }}">
                                                                                My Blogs
                                                                            </a>
                                                                        </li>
                                                                        <li class="mb-1">
                                                                            <a class="btn header-btn w-100"
                                                                                href="#">
                                                                                My Courses
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <form action="{{ route('logout') }}"
                                                                                method="POST" id="logout-form">
                                                                                @csrf
                                                                                <a class="btn header-btn w-100"
                                                                                    href="javascript:document.getElementById('logout-form').submit();">
                                                                                    Logout
                                                                                </a>
                                                                            </form>
                                                                        </li>
                                                                    </ul>

                                                                </li>
                                                            @endif
                                                        </ul>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Mobile Menu -->
                                        <div class="col-12">
                                            <div class="mobile_menu d-block d-lg-none"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Header End -->
                </header>
