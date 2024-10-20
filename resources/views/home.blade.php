@extends('main')
@section('title', 'Accueil')

@section('content')
    <!-- tp-view-area-start -->
    <section class="ads-area mt-70 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Carrousel Start -->
                    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="bd-placeholder-img" width="100%" height="20%" src="assets/media/banner.webp"
                                    alt="">

                                <div class="container">
                                    <div class="carousel-caption text-start">
                                        <h1>Example headline.</h1>
                                        <p class="opacity-75">Some representative placeholder content for the first
                                            slide of the carousel.</p>
                                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                                    </div>
                                </div>
                            </div>
                            <!-- <svg class="bd-placeholder-img" width="100%" height="100%"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                        </svg> -->
                            <div class="carousel-item">
                                <img class="bd-placeholder-img" width="100%" height="20%" src="assets/media/banner.webp"
                                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"
                                    alt="">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1>Another example headline.</h1>
                                        <p>Some representative placeholder content for the second slide of the
                                            carousel.</p>
                                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="bd-placeholder-img" width="100%" height="20%" src="assets/media/banner.webp"
                                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"
                                    alt="">

                                <div class="container">
                                    <div class="carousel-caption text-end">
                                        <h1>One more for good measure.</h1>
                                        <p>Some representative placeholder content for the third slide of this
                                            carousel.</p>
                                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- Carrousel End -->
                </div>
            </div>
        </div>
    </section>
    <!-- tp-view-area-end -->
    
    <section class="blog-hero-area mt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <article class="post-block-style-wrapper post-block-template-one post-block-template-small">
                        <div class="post-block-style-inner">
                            <div class="post-block-media-wrap">
                                <a href="">
                                    <img src="{{ asset('assets/media/news1.jfif') }}" alt="Post title">
                                </a>
                            </div>
                            <div class="post-block-content-wrap">
                                <div class="post-item-title">
                                    <h2 class="post-title">
                                        <a href="">Michelle Tea’s Punk Parenting Memoir</a>
                                    </h2>
                                </div>
                                <div class="post-bottom-meta-list">
                                    <div class="post-meta-author-box">
                                        By <a href="javascript:void(0)">Laura Tanenbaum</a>
                                    </div>
                                    <div class="post-meta-date-box">
                                        Sep 22
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="post-block-style-wrapper post-block-template-one post-block-template-small">
                        <div class="post-block-style-inner">
                            <div class="post-block-media-wrap">
                                <a href="">
                                    <img src="{{ asset('assets/media/news2.jpeg') }}" alt="Post title">
                                </a>
                            </div>
                            <div class="post-block-content-wrap">
                                <div class="post-item-title">
                                    <h2 class="post-title">
                                        <a href="">A Design Lover's Guide Mexico City</a>
                                    </h2>
                                </div>
                                <div class="post-bottom-meta-list">
                                    <div class="post-meta-author-box">
                                        By <a href="javascript:void(0)">Laura Tanenbaum</a>
                                    </div>
                                    <div class="post-meta-date-box">
                                        Sep 22
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                </div>
                <div class="col-lg-6">
                    <article class="post-block-style-wrapper post-block-template-one sm-mt-24">
                        <div class="post-block-style-inner">
                            <div class="container-fluid col-lg-9">
                                <div class="post-block-media-wrap">
                                    <a href="">
                                        <img src="{{ asset('assets/media/1703845995BACONGO-2.jpg') }}" alt="Post title">
                                    </a>
                                </div>
                            </div>
                            <div class=" container-fluid col-lg-9 post-block-content-wrap">
                                <div class="post-item-title">
                                    <h2 class="post-title">
                                        LE MINISTRE GOUVERNEUR
                                    </h2>
                                </div>
                                <div class="post-excerpt-box">
                                    <article
                                        class="post-block-style-wrapper post-block-template-two most-read-block-list pb-0">
                                        <div class="post-block-style-inner post-block-list-style-inner">
                                            <div class="post-block-content-wrap">
                                                <div class="post-bottom-meta-list">
                                                    <div class="post-meta-author-box">
                                                        <a href="javascript:void(0)">Mot du Ministre Gouverneur</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                    <article
                                        class="post-block-style-wrapper post-block-template-two most-read-block-list pb-0">
                                        <div class="post-block-style-inner post-block-list-style-inner">
                                            <div class="post-block-content-wrap">
                                                <div class="post-bottom-meta-list">
                                                    <div class="post-meta-author-box">
                                                        <a href="javascript:void(0)">Biographie</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                    <article
                                        class="post-block-style-wrapper post-block-template-two most-read-block-list pb-0">
                                        <div class="post-block-style-inner post-block-list-style-inner">
                                            <div class="post-block-content-wrap">
                                                <div class="post-bottom-meta-list">
                                                    <div class="post-meta-author-box">
                                                        <a href="javascript:void(0)">Discours & interventions</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>


                                    <article
                                        class="post-block-style-wrapper post-block-template-two most-read-block-list pb-0">
                                        <div class="post-block-style-inner post-block-list-style-inner">
                                            <div class="post-block-content-wrap">
                                                <div class="post-bottom-meta-list">
                                                    <div class="post-meta-author-box">
                                                        <a href="javascript:void(0)">Anciens Maires et
                                                            Gouverneurs</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                </div>
                            </div>
                        </div>
                    </article>

                </div>
                <div class="col-lg-3">
                    <div class="section-title sm-mt-24">
                        <h2 class="title-block">
                            Depeches
                        </h2>
                    </div>
                    <div class="post-block-template-two-wrapper">
                        <article class="post-block-style-wrapper post-block-template-two">
                            <div class="post-block-style-inner post-block-list-style-inner">
                                <div class="post-block-media-wrap">
                                    <a href="">
                                        <img src="{{ asset('assets/media/depeche1.jpg') }}" alt="Post title">
                                    </a>
                                </div>
                                <div class="post-block-content-wrap">
                                    <div class="post-category-box">
                                        <a class="post-cat-item" href="">Politics</a>
                                    </div>
                                    <div class="post-item-title">
                                        <h2 class="post-title">
                                            <a href="">Corporations Are People, Too</a>
                                        </h2>
                                    </div>
                                    <div class="post-bottom-meta-list">
                                        <div class="post-meta-author-box">
                                            <a href="javascript:void(0)">Alisson</a>
                                        </div>
                                        <div class="post-meta-date-box">
                                            Sep 22
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post-block-style-wrapper post-block-template-two">
                            <div class="post-block-style-inner post-block-list-style-inner">
                                <div class="post-block-media-wrap">
                                    <a href="">
                                        <img src="{{ asset('assets/media/depeche2.jpg') }}" alt="Post title">
                                    </a>
                                </div>
                                <div class="post-block-content-wrap">
                                    <div class="post-category-box">
                                        <a class="post-cat-item" href="">Lifestyle</a>
                                    </div>
                                    <div class="post-item-title">
                                        <h2 class="post-title">
                                            <a href="">The UX design trends 2023</a>
                                        </h2>
                                    </div>
                                    <div class="post-bottom-meta-list">
                                        <div class="post-meta-author-box">
                                            <a href="javascript:void(0)">Tony Stark</a>
                                        </div>
                                        <div class="post-meta-date-box">
                                            Sep 22
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post-block-style-wrapper post-block-template-two">
                            <div class="post-block-style-inner post-block-list-style-inner">
                                <div class="post-block-media-wrap">
                                    <a href="">
                                        <img src="{{ asset('assets/media/depeche3.jpg') }}" alt="Post title">
                                    </a>
                                </div>
                                <div class="post-block-content-wrap">
                                    <div class="post-category-box">
                                        <a class="post-cat-item" href="">Lifestyle</a>
                                    </div>
                                    <div class="post-item-title">
                                        <h2 class="post-title">
                                            <a href="">Five signs of smart person</a>
                                        </h2>
                                    </div>
                                    <div class="post-bottom-meta-list">
                                        <div class="post-meta-author-box">
                                            <a href="javascript:void(0)">Tony Stark</a>
                                        </div>
                                        <div class="post-meta-date-box">
                                            Sep 22
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post-block-style-wrapper post-block-template-two">
                            <div class="post-block-style-inner post-block-list-style-inner">
                                <div class="post-block-media-wrap">
                                    <a href="">
                                        <img src="{{ asset('assets/media/depeche1.jpg') }}" alt="Post title">
                                    </a>
                                </div>
                                <div class="post-block-content-wrap">
                                    <div class="post-category-box">
                                        <a class="post-cat-item" href="">Lifestyle</a>
                                    </div>
                                    <div class="post-item-title">
                                        <h2 class="post-title">
                                            <a href="">The persecution of the poet</a>
                                        </h2>
                                    </div>
                                    <div class="post-bottom-meta-list">
                                        <div class="post-meta-author-box">
                                            <a href="javascript:void(0)">Tony Stark</a>
                                        </div>
                                        <div class="post-meta-date-box">
                                            Sep 22
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="post-block-style-wrapper post-block-template-two">
                            <div class="post-block-style-inner post-block-list-style-inner">
                                <div class="post-block-media-wrap">
                                    <a href="">
                                        <img src="{{ asset('assets/media/depeche2.jpg') }}" alt="Post title">
                                    </a>
                                </div>
                                <div class="post-block-content-wrap">
                                    <div class="post-category-box">
                                        <a class="post-cat-item" href="">Lifestyle</a>
                                    </div>
                                    <div class="post-item-title">
                                        <h2 class="post-title">
                                            <a href="">The Complicity of the books</a>
                                        </h2>
                                    </div>
                                    <div class="post-bottom-meta-list">
                                        <div class="post-meta-author-box">
                                            <a href="javascript:void(0)">Tony Stark</a>
                                        </div>
                                        <div class="post-meta-date-box">
                                            Sep 22
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section-divider mt-60 mb-60"></div>

    <section class="popular-posts-column-area mt-60 mb-35">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 class="title-block">
                        Perspectives
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <article class="post-block-style-wrapper post-block-template-one post-block-template-medium mb-40">
                        <div class="post-block-style-inner">
                            <div class="post-block-media-wrap">
                                <a href="">
                                    <img src="{{ asset('assets/media/mission.jpg') }}" alt="Post title">
                                </a>
                            </div>
                            <div class="post-block-content-wrap">
                                <div class="post-meta-author-box">
                                    <a href="">MISSION</a>
                                </div>
                                <div class="post-item-title">
                                    <h2 class="post-title">
                                        <a href="">Your Empty Office Turn Into Apartments?</a>
                                    </h2>
                                </div>
                                <div class="post-excerpt-box">
                                    <p>In Teaching White Supremacy, Donald Yacovone traces how the writing</p>
                                </div>
                                <div class="post-bottom-meta-list">
                                    <div class="post-meta-author-box">
                                        By <a href="javascript:void(0)">Laura Tanenbaum</a>
                                    </div>
                                    <div class="post-meta-date-box">
                                        Sep 22
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="post-block-style-wrapper post-block-template-one post-block-template-medium mb-40">
                        <div class="post-block-style-inner">

                            <div class="post-block-media-wrap">
                                <a href="">
                                    <img src="{{ asset('assets/media/lucarne.jpg') }}" alt="Post title">
                                </a>
                            </div>
                            <div class="post-block-content-wrap">
                                <div class="post-meta-author-box">
                                    <a href="">LUCARNE</a>
                                </div>
                                <div class="post-item-title">
                                    <h2 class="post-title">
                                        <a href="">Yeah, i bought some Dogecoin today</a>
                                    </h2>
                                </div>
                                <div class="post-excerpt-box">
                                    <p>In Teaching White Supremacy, Donald Yacovone traces how the writing</p>
                                </div>
                                <div class="post-bottom-meta-list">
                                    <div class="post-meta-author-box">
                                        By <a href="javascript:void(0)">Laura Tanenbaum</a>
                                    </div>
                                    <div class="post-meta-date-box">
                                        Sep 22
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="post-block-style-wrapper post-block-template-one post-block-template-medium mb-40">
                        <div class="post-block-style-inner">
                            <div class="post-block-media-wrap">
                                <a href="">
                                    <img src="{{ asset('assets/media/itineraire.jpg') }}" alt="Post title">
                                </a>
                            </div>
                            <div class="post-block-content-wrap">
                                <div class="post-meta-author-box">
                                    <a href="">ITINERAIRE</a>
                                </div>
                                <div class="post-item-title">
                                    <h2 class="post-title">
                                        <a href="">The remarkable rise of Ryan Manson</a>
                                    </h2>
                                </div>
                                <div class="post-excerpt-box">
                                    <p>In Teaching White Supremacy, Donald Yacovone traces how the writing</p>
                                </div>
                                <div class="post-bottom-meta-list">
                                    <div class="post-meta-author-box">
                                        By <a href="javascript:void(0)">Laura Tanenbaum</a>
                                    </div>
                                    <div class="post-meta-date-box">
                                        Sep 22
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <div class="section-divider mt-60 mb-60"></div>


    <section class="video-posts-area pt-80 pb-80 mt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h2 class="title-block">
                            Featured Videos
                        </h2>
                    </div>
                    <article class="post-block-style-wrapper post-block-template-one post-block-video">
                        <div class="post-block-style-inner">
                            <div class="post-block-video-thumb">
                                <div class="post-block-media-wrap">
                                    <a href="">
                                        <img src="{{ asset('assets/media/singer.jpg') }}" alt="Post title">
                                    </a>
                                </div>
                                <div class="video-play-icon-wrap">
                                    <a href="" class="theme-play-btn video-play-btn"></a>
                                </div>
                            </div>
                            <div class="post-block-content-wrap">
                                <div class="post-item-title">
                                    <h2 class="post-title">
                                        <a href="">8 Reasons to become a Design Preneur</a>
                                    </h2>
                                </div>
                                <div class="post-excerpt-box">
                                    <p>Design your way to success by Mike Rosales hellow and welcome to my blog on
                                        anaything about Design and Entrepreneurship</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-5">
                    <div class="section-btn text-end">
                        <a href=""><span>+</span>See All Videos</a>
                    </div>
                    <article class="post-block-style-wrapper post-block-template-two post-video-list">
                        <div class="post-block-style-inner post-block-list-style-inner">
                            <div class="post-block-media-wrap">
                                <a href="">
                                    <img src="{{ asset('assets/media/model.jpg') }}" alt="Post title">
                                </a>
                            </div>
                            <div class="post-block-content-wrap">
                                <div class="post-item-title">
                                    <h2 class="post-title">
                                        <a href="">Maddie Ziegler Takes a Lie Detector Test</a>
                                    </h2>
                                </div>
                                <div class="post-bottom-meta-list">
                                    <div class="post-meta-author-box">
                                        <a href="javascript:void(0)">Cristiano</a>
                                    </div>
                                    <div class="post-meta-date-box">
                                        Sep 30
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="post-block-style-wrapper post-block-template-two post-video-list">
                        <div class="post-block-style-inner post-block-list-style-inner">
                            <div class="post-block-media-wrap">
                                <a href="">
                                    <img src="{{ asset('assets/media/beach.jpg') }}" alt="Post title">
                                </a>
                            </div>
                            <div class="post-block-content-wrap">
                                <div class="post-item-title">
                                    <h2 class="post-title">
                                        <a href="">The dark fate that awaits every player</a>
                                    </h2>
                                </div>
                                <div class="post-bottom-meta-list">
                                    <div class="post-meta-author-box">
                                        <a href="javascript:void(0)">Cristiano</a>
                                    </div>
                                    <div class="post-meta-date-box">
                                        Sep 30
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="post-block-style-wrapper post-block-template-two post-video-list">
                        <div class="post-block-style-inner post-block-list-style-inner">
                            <div class="post-block-media-wrap">
                                <a href="">
                                    <img src="{{ asset('assets/media/sky-open.jpg') }}" alt="Post title">
                                </a>
                            </div>
                            <div class="post-block-content-wrap">
                                <div class="post-item-title">
                                    <h2 class="post-title">
                                        <a href="">Perfection has to do with the end product</a>
                                    </h2>
                                </div>
                                <div class="post-bottom-meta-list">
                                    <div class="post-meta-author-box">
                                        <a href="javascript:void(0)">Cristiano</a>
                                    </div>
                                    <div class="post-meta-date-box">
                                        Sep 30
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <div class="section-divider"></div>
    <section class="video-posts-area pt-80 pb-80 mb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h2 class="title-block">
                            Featured Photos
                        </h2>
                    </div>
                    <article class="post-block-style-wrapper post-block-template-one post-block-video">
                        <div class="post-block-style-inner">
                            <div class="post-block-video-thumb">
                                <div class="post-block-media-wrap">
                                    <a href="">
                                        <img src="{{ asset('assets/media/singer.jpg') }}" alt="Post title">
                                    </a>
                                </div>
                                <div class="video-play-icon-wrap">
                                    <a href="" class="theme-play-btn video-play-btn"></a>
                                </div>
                            </div>
                            <div class="post-block-content-wrap">
                                <div class="post-item-title">
                                    <h2 class="post-title">
                                        <a href="">8 Reasons to become a Design Preneur</a>
                                    </h2>
                                </div>
                                <div class="post-excerpt-box">
                                    <p>Design your way to success by Mike Rosales hellow and welcome to my blog on
                                        anaything about Design and Entrepreneurship</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-5">
                    <div class="section-btn text-end">
                        <a href=""><span>+</span>See All Videos</a>
                    </div>
                    <article class="post-block-style-wrapper post-block-template-two post-video-list">
                        <div class="post-block-style-inner post-block-list-style-inner">
                            <div class="post-block-media-wrap">
                                <a href="">
                                    <img src="{{ asset('assets/media/model.jpg') }}" alt="Post title">
                                </a>
                            </div>
                            <div class="post-block-content-wrap">
                                <div class="post-item-title">
                                    <h2 class="post-title">
                                        <a href="">Maddie Ziegler Takes a Lie Detector Test</a>
                                    </h2>
                                </div>
                                <div class="post-bottom-meta-list">
                                    <div class="post-meta-author-box">
                                        <a href="javascript:void(0)">Cristiano</a>
                                    </div>
                                    <div class="post-meta-date-box">
                                        Sep 30
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="post-block-style-wrapper post-block-template-two post-video-list">
                        <div class="post-block-style-inner post-block-list-style-inner">
                            <div class="post-block-media-wrap">
                                <a href="">
                                    <img src="{{ asset('assets/media/beach.jpg') }}" alt="Post title">
                                </a>
                            </div>
                            <div class="post-block-content-wrap">
                                <div class="post-item-title">
                                    <h2 class="post-title">
                                        <a href="">The dark fate that awaits every player</a>
                                    </h2>
                                </div>
                                <div class="post-bottom-meta-list">
                                    <div class="post-meta-author-box">
                                        <a href="javascript:void(0)">Cristiano</a>
                                    </div>
                                    <div class="post-meta-date-box">
                                        Sep 30
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="post-block-style-wrapper post-block-template-two post-video-list">
                        <div class="post-block-style-inner post-block-list-style-inner">
                            <div class="post-block-media-wrap">
                                <a href="">
                                    <img src="{{ asset('assets/media/sky-open.jpg') }}" alt="Post title">
                                </a>
                            </div>
                            <div class="post-block-content-wrap">
                                <div class="post-item-title">
                                    <h2 class="post-title">
                                        <a href="">Perfection has to do with the end product</a>
                                    </h2>
                                </div>
                                <div class="post-bottom-meta-list">
                                    <div class="post-meta-author-box">
                                        <a href="javascript:void(0)">Cristiano</a>
                                    </div>
                                    <div class="post-meta-date-box">
                                        Sep 30
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
