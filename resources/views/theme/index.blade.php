    @extends('theme.master')
    @section('title', '-Home')
    @section('content')
        <!--? slider Area Start-->
        <section class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider start -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-12">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">Online learning<br> platform</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">Build skills with courses,
                                        certificates, and degrees online from world-class universities and companies</p>

                                    @guest
                                        <a href="{{ route('register') }}" class="btn hero-btn" data-animation="fadeInLeft"
                                            data-delay="0.7s">Join for Free</a>
                                    @endguest

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider end -->
            </div>
        </section>
        <!-- slider Area End-->
        @include('theme.partials.service_area')
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Our featured courses</h2>
                        </div>
                    </div>
                </div>
                <div class="courses-actives">
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="assets/img/gallery/featured1.png" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>User Experience</p>
                                <h3><a href="#">Fundamental of UX for Application design</a></h3>
                                <p>The automated process all your website tasks. Discover tools and techniques to engage
                                    effectively with vulnerable children and young people.

                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="price">
                                        <span>$135</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="assets/img/gallery/featured2.png" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>User Experience</p>
                                <h3><a href="#">Fundamental of UX for Application design</a></h3>
                                <p>The automated process all your website tasks. Discover tools and techniques to engage
                                    effectively with vulnerable children and young people.
                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="price">
                                        <span>$135</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="assets/img/gallery/featured3.png" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>User Experience</p>
                                <h3><a href="#">Fundamental of UX for Application design</a></h3>
                                <p>The automated process all your website tasks. Discover tools and techniques to engage
                                    effectively with vulnerable children and young people.

                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="price">
                                        <span>$135</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="assets/img/gallery/featured2.png" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>User Experience</p>
                                <h3><a href="#">Fundamental of UX for Application design</a></h3>
                                <p>The automated process all your website tasks. Discover tools and techniques to engage
                                    effectively with vulnerable children and young people.

                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="price">
                                        <span>$135</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                </div>
            </div>
        </div>
        <!-- Courses area End -->
        @include('theme.partials.learn_new')
        @include('theme.partials.top_subject')
        @include('theme.partials.learn_outcomes')
        @include('theme.partials.team')
        <!--? About Area-2 Start -->
        <section class="about-area2 fix pb-padding">
            <div class="support-wrapper align-items-center">
                <div class="right-content2">
                    <!-- img -->
                    <div class="right-img">
                        <img src="assets/img/gallery/about2.png" alt="">
                    </div>
                </div>
                <div class="left-content2">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-20">
                        <div class="front-text">
                            <h2 class="">Take the next step
                                toward your personal
                                and professional goals
                                with us.</h2>
                            <p>The automated process all your website tasks. Discover tools and techniques to engage
                                effectively with vulnerable children and young people.</p>
                            <a href="{{ route('register') }}" class="btn">Join now for Free</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area-2 End -->

    @endsection
