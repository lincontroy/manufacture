@extends('layouts.main')
@section('content')
<section class="banner-section">
    <div id="banner-slider" class="banner-slider-wrapper swiper-container swiper-container-initialized swiper-container-vertical" style="cursor: grab;">
        <div class="swiper-wrapper banner-slider" style="transform: translate3d(0px, -3035px, 0px); transition-duration: 0ms;">
            
            <!-- SLIDER ITEM -->
            <div class="banner-slider-item swiper-slide" style="height: 607px; transition: all;">
                <figure class="media-wrapper slide-inner">
                    <img src="./SINAEA - Industry and Factory HTML Template _ Home Showcase_files/1.jpg" alt="Innovating Manufacturing">
                </figure>
                <div class="content-box">
                    <div class="content">
                        <div class="auto-container">
                            <div class="inner">
                                <h3 class="mask-loader">Unravel Every Industry's Untapped Potential</h3>
                                <div class="text mask-loader">Africa, our time is now!!  has been a popular phrase over the last decade, especially in relation to artistic expression. Rarely has it been used to champion industrialization, manufacturing and infrastructure liberation. The norm, in most African countries has the been to import a myriad of manufactured products from China and the Western world, despite Africa having the capacity to produce and manufacture the same products.</div>
                                <div class="btn-box mask-loader">
                                    <a href="{{ url('/about') }}" class="theme-btn btn-style-two"><span class="btn-title">White paper</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- SLIDER ITEM -->
            <div class="banner-slider-item swiper-slide" style="height: 607px; transition: all;">
                <figure class="media-wrapper slide-inner">
                    <img src="./SINAEA - Industry and Factory HTML Template _ Home Showcase_files/2.jpg" alt="Smart Factory Solutions">
                </figure>
                <div class="content-box">
                    <div class="content">
                        <div class="auto-container">
                            <h3>Smart <span class="theme_color">Factory Solutions</span></h3>
                            <div class="text">We provide cutting-edge automation and efficiency strategies to optimize industrial production.</div>
                            <div class="btn-box">
                                <a href="{{ url('/services') }}" class="theme-btn btn-style-two"><span class="btn-title">Our Services</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- SLIDER ITEM -->
            <div class="banner-slider-item swiper-slide" style="height: 607px; transition: all;">
                <figure class="media-wrapper slide-inner">
                    <img src="./SINAEA - Industry and Factory HTML Template _ Home Showcase_files/3.jpg" alt="Enhancing Industrial Growth">
                </figure>
                <div class="content-box">
                    <div class="content">
                        <div class="auto-container">
                            <h3>Enhancing <span class="theme_color">Industrial Growth</span></h3>
                            <div class="text">Empowering manufacturers with innovative technology and world-class solutions.</div>
                            <div class="btn-box">
                                <a href="{{ url('/projects') }}" class="theme-btn btn-style-two"><span class="btn-title">Our Projects</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- SLIDER ITEM -->
            <div class="banner-slider-item swiper-slide" style="height: 607px; transition: all;">
                <figure class="media-wrapper slide-inner">
                    <img src="./SINAEA - Industry and Factory HTML Template _ Home Showcase_files/4.jpg" alt="Quality Manufacturing in Kenya">
                </figure>
                <div class="content-box">
                    <div class="content">
                        <div class="auto-container">
                            <h3>Quality <span class="theme_color">Manufacturing Solutions</span></h3>
                            <div class="text">Committed to high-quality standards, sustainable practices, and industrial excellence.</div>
                            <div class="btn-box">
                                <a href="{{ url('/contact') }}" class="theme-btn btn-style-two"><span class="btn-title">Contact Us</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="banner-slider-arrows">
            <i id="banner-slider-previous" class="banner-slider-arrow banner-slider-arrow--previous fa fa-angle-left" tabindex="0" role="button" aria-label="Previous slide"></i>
            <i id="banner-slider-next" class="banner-slider-arrow banner-slider-arrow--next fa fa-angle-right" tabindex="0" role="button" aria-label="Next slide"></i>
        </div>

        <div class="banner-slider-counter">
            <div id="banner-slider-counter" class="counter swiper-pagination-custom">04 / 04</div>
        </div>

        <!-- Social Links -->
        <div class="circular-menu">
            <div class="items-wrapper">
                <a href="https://facebook.com/manufacturing.co.ke" class="menu-item"><span class="fab fa-facebook"></span></a>
                <a href="https://twitter.com/manufacturing_co_ke" class="menu-item"><span class="fab fa-twitter"></span></a>
                <a href="https://linkedin.com/company/manufacturing-co-ke" class="menu-item"><span class="fab fa-linkedin-in"></span></a>
            </div>
            <button class="floating-btn"><i class="fa fa-share-alt"></i></button>
        </div>
    </div>
</section>
@endsection
