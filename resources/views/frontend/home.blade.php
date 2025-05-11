@extends('frontend.layouts.master')

@section('content')

    <!-- main-slider-start -->
    <section class="main-slider-one">
        <div class="main-slider-one__element-one wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='700ms'>
            <img src="{{ asset('frontend/assets/images/shapes/hero-shape-1-2.png') }}" alt="solinom element">
        </div>
        <div class="main-slider-one__element-two wow fadeInDown" data-wow-duration='1500ms' data-wow-delay='700ms'>
            <img src="{{ asset('frontend/assets/images/shapes/hero-shape-1-1.png') }}" alt="solinom element">
        </div>
        
        <div class="container">
            <div class="main-slider-one__carousel solinom-owl__carousel owl-carousel" data-owl-options='{
            "loop": true,
            "animateOut": "fadeOut",
            "animateIn": "fadeIn",
            "items": 1,
            "autoplay": true,
            "autoplayTimeout": 7000,
            "smartSpeed": 1000,
            "nav": false,
            "dots": false,
            "margin": 0
        }'>
                <div class="main-slider-one__item">
                    <div class="main-slider-one__bg" style="background-image: url({{ asset('frontend/assets/images/backgrounds/slider-1-1.jpg') }});"></div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="main-slider-one__content">
                                <h5 class="main-slider-one__sub-title">The best Sri Lanka hotel</h5>
                                <div class="main-slider-one__box">
                                    <h2 class="main-slider-one__title">enjoy Ceylon <br> <span>experience</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-slider-one__item">
                    <div class="main-slider-one__bg" style="background-image: url({{asset('frontend/assets/images/backgrounds/slider-1-1.jpg')}});"></div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="main-slider-one__content">
                                <h5 class="main-slider-one__sub-title">The best Sri Lanka hotel</h5>
                                <div class="main-slider-one__box">
                                    <h2 class="main-slider-one__title">enjoy Ceylon <br> <span>experience</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-slider-one__item">
                    <div class="main-slider-one__bg" style="background-image: url({{asset('frontend/assets/images/backgrounds/slider-1-1.jpg')}});"></div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="main-slider-one__content">
                                <h5 class="main-slider-one__sub-title">The best Sri Lanka hotel</h5>
                                <div class="main-slider-one__box">
                                    <h2 class="main-slider-one__title">enjoy Ceylon <br> <span>experience</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- main-search-start -->
        <div class="banner-form">
            <div class="banner-form__position wow fadeInUp" data-wow-delay="300ms">
                <div class="container">
                    <form class="banner-form__wrapper" action="#">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="banner-form__control">
                                    <label for="checkin">Checkin</label>
                                    <input class="solinom-datepicker" id="checkin" type="text" name="checkin" placeholder="22/07/2023">
                                    <i class="icon-calendar-5-1"></i>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="banner-form__control">
                                    <label for="checkout">Checkout</label>
                                    <input class="solinom-datepicker" id="checkout" type="text" name="checkout" placeholder="22/07/2023">
                                    <i class="icon-calendar-5-1"></i>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="banner-form__control">
                                    <label for="guests">Guests</label>
                                    <div class="quantity-box">
                                        <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                        <input id="guests" type="text" value="1">
                                        <button type="button" class="add"><i class="icon-plus-1"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="banner-form__control">
                                    <label for="guests">Children</label>
                                    <div class="quantity-box">
                                        <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                        <input id="guests" type="text" value="1">
                                        <button type="button" class="add"><i class="icon-plus-1"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="banner-form__popup">
                                    <button class="solinom-btn banner-form__filter">
                                        <i class="icon-filter"></i>
                                    </button>
                                    <button type="submit" aria-label="search submit" class="solinom-btn">
                                        <i class="icon-sharce"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="explore__form-checkbox-list">
                                <div class="price-ranger">
                                    <div class="ranger-min-max-block">
                                        <div class="ranger-min-max-block__price">
                                            <span>Price Range from</span>
                                            <input type="text" readonly class="min">
                                            <span>To</span>
                                            <input type="text" readonly class="max">
                                        </div>
                                    </div>
                                    <div id="slider-range"></div>
                                </div>

                                <div class="bedroom-filter">
                                    <div class="box-select">
                                        <label class="title-select">Bathrooms</label>
                                        <select name="roomSize" class="selectpicker" id="roomSize">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <div class="box-select">
                                        <label class="title-select">Bedrooms</label>
                                        <select name="roomSize" class="selectpicker" id="roomSizeTwo">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <div class="box-select">
                                        <label class="title-select">Type</label>
                                        <select name="roomSize" class="selectpicker" id="roomSizeThree">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                </div>

                                <h3 class="banner-form__popup__title">Amenities:</h3>
                                <ul class="checkboxes list-unstyled">
                                    <li>
                                        <input id="check-2" type="checkbox" name="check">
                                        <label for="check-2">Air Conditioning</label>
                                    </li>
                                    <li>
                                        <input id="check-3" type="checkbox" name="check">
                                        <label for="check-3">Disabled Access</label>
                                    </li>
                                    <li>
                                        <input id="check-4" type="checkbox" name="check">
                                        <label for="check-4">Floor</label>
                                    </li>
                                    <li>
                                        <input id="check-5" type="checkbox" name="check">
                                        <label for="check-5">Laundry Room</label>
                                    </li>
                                    <li>
                                        <input id="check-6" type="checkbox" name="check">
                                        <label for="check-6">Gym</label>
                                    </li>
                                    <li>
                                        <input id="check-7" type="checkbox" name="check">
                                        <label for="check-7">Alarm</label>
                                    </li>
                                    <li>
                                        <input id="check-8" type="checkbox" name="check">
                                        <label for="check-8">Window Covering</label>
                                    </li>
                                    <li>
                                        <input id="check-9" type="checkbox" name="check">
                                        <label for="check-9">WiFi</label>
                                    </li>
                                    <li>
                                        <input id="check-10" type="checkbox" name="check">
                                        <label for="check-10">TV Cable</label>
                                    </li>
                                    <li>
                                        <input id="check-11" type="checkbox" name="check">
                                        <label for="check-11">Dryer</label>
                                    </li>
                                    <li>
                                        <input id="check-12" type="checkbox" name="check">
                                        <label for="check-12">Microwave</label>
                                    </li>
                                    <li>
                                        <input id="check-13" type="checkbox" name="check">
                                        <label for="check-13">Washer</label>
                                    </li>
                                    <li>
                                        <input id="check-14" type="checkbox" name="check">
                                        <label for="check-14">Refrigerator</label>
                                    </li>
                                    <li>
                                        <input id="check-15" type="checkbox" name="check">
                                        <label for="check-15">Outdoor Shower</label>
                                    </li>
                                    <li>
                                        <input id="check-16" type="checkbox" name="check">
                                        <label for="check-16">Garden</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- main-search-Done -->

    </section>
    <!-- main-slider-end -->


    
    <!-- About Section Start -->
    <section class="about-three">
        <div class="container">
            <div class="row align-items-center gutter-y-40">
                <div class="col-lg-6">
                    <div class="about-three__thumb">
                        <div class="about-three__thumb__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                            <img src="{{asset('frontend/assets/images/blog/blog-5-1.jpg')}}" alt="solinom image">
                        </div>
                        <!-- <div class="about-three__thumb__inner">
                            <div class="about-three__thumb__small-image">
                                <img src="assets/images/blog/blog-s-5-1.jpg" alt="solinom image">
                            </div>
                            <div class="about-three__thumb__element">
                                <img src="assets/images/shapes/about-2-1.png" alt>
                            </div>
                            <div class="about-three__thumb__element-two">
                                <img src="assets/images/shapes/border-3-1.png" alt>
                            </div>
                        </div>
                        <div class="about-three__thumb__logo">
                            <img src="assets/images/about/icon.png" alt>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-three__content">
                        <div class="sec-title text-start sec-title--two">

                            <img src="{{asset('frontend/assets/images/shapes/sec-title-s-1.png')}}" alt="WELCOME TO HOTEL" class="sec-title__img">


                            <h6 class="sec-title__tagline bw-split-in-right">WELCOME TO HOTEL</h6>

                            <h3 class="sec-title__title bw-split-in-up">Get to Know Our Aviyana Ceylon</h3>
                        </div>
                        <p class="about-three__text wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                        <ul class="about-three__list list-unstyled">
                            <li class="about-three__list__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <div class="about-three__list__icon">
                                    <i class="icon-door-lock-1"></i>
                                </div>
                                <h4 class="about-three__list__title"><a href="blog-details-left.html">Suite Smart Key</a></h4>
                            </li>
                            <li class="about-three__list__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                <div class="about-three__list__icon">
                                    <i class="icon-luggage-2"></i>
                                </div>
                                <h4 class="about-three__list__title"><a href="blog-details-left.html">Luggage Deposited</a></h4>
                            </li>
                            <li class="about-three__list__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                                <div class="about-three__list__icon">
                                    <i class="icon-vacuum-cleaner-1"></i>
                                </div>
                                <h4 class="about-three__list__title"><a href="blog-details-left.html">Daily Cleaning</a></h4>
                            </li>
                            <li class="about-three__list__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                <div class="about-three__list__icon">
                                    <i class="icon-hotel-service-1"></i>
                                </div>
                                <h4 class="about-three__list__title"><a href="blog-details-left.html">Room Service</a></h4>
                            </li>
                        </ul>
                        <a href="about.html" class="solinom-btn about-three__btn solinom-btn--base">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

      <!-- Feature section Start -->
    <section class="feature-three">
        <div class="container">
            <div class="sec-title text-center sec-title--two">
                <img src="{{ asset('frontend/assets/images/shapes/sec-title-s-1.png') }}" alt="Discover our All" class="sec-title__img">
                <h6 class="sec-title__tagline bw-split-in-right">Discover our All</h6>
                <h3 class="sec-title__title bw-split-in-up">Featured Amenities</h3>
            </div>
            <div class="row gutter-y-30">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="feature-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                        <div class="feature-three__item__icon">
                            <i class="icon-car-1"></i>
                            <div class="feature-three__item__icon__element">
                                <img src="{{ asset('frontend/assets/images/shapes/shaper-2-1.png') }}" alt>
                            </div>
                        </div>
                        <h4 class="feature-three__item__title"><a href="room-details-2.html">Free parking</a></h4>
                        <p class="feature-three__item__text">It is a long established fact that a reader will be distred by the readable </p>
                        <a href="deluxe-room-details.html" class="solinom-btn">Read More <i class="icon-right-arrow-long"></i></a>
                        <div class="feature-three__item__element-top">
                            <img src="{{ asset('frontend/assets/images/shapes/frame-f-1-2.png') }}" alt>
                        </div>
                        <div class="feature-three__item__element-bottom">
                            <img src="{{ asset('frontend/assets/images/shapes/frame-f-1-1.png') }}" alt>
                        </div>
                        <div class="feature-three__item__element-hover">
                            <img src="{{ asset('frontend/assets/images/shapes/feature-3-1.png') }}" alt>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="feature-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                        <div class="feature-three__item__icon">
                            <i class="icon-wifi-1"></i>
                            <div class="feature-three__item__icon__element">
                                <img src="{{ asset('frontend/assets/images/shapes/shaper-2-1.png') }}" alt>
                            </div>
                        </div>
                        <h4 class="feature-three__item__title"><a href="room-details-3.html">Wifi Internet</a></h4>
                        <p class="feature-three__item__text">It is a long established fact that a reader will be distred by the readable </p>
                        <a href="deluxe-room-details.html" class="solinom-btn">Read More <i class="icon-right-arrow-long"></i></a>
                        <div class="feature-three__item__element-top">
                            <img src="{{ asset('frontend/assets/images/shapes/frame-f-1-2.png') }}" alt>
                        </div>
                        <div class="feature-three__item__element-bottom">
                            <img src="{{ asset('frontend/assets/images/shapes/frame-f-1-1.png') }}" alt>
                        </div>
                        <div class="feature-three__item__element-hover">
                            <img src="{{ asset('frontend/assets/images/shapes/feature-3-1.png') }}" alt>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="feature-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='700ms'>
                        <div class="feature-three__item__icon">
                            <i class=" icon-customer-service-1"></i>
                            <div class="feature-three__item__icon__element">
                                <img src="{{ asset('frontend/assets/images/shapes/shaper-2-1.png') }}" alt>
                            </div>
                        </div>
                        <h4 class="feature-three__item__title"><a href="room-details-3.html">24/7 Support</a></h4>
                        <p class="feature-three__item__text">It is a long established fact that a reader will be distred by the readable </p>
                        <a href="deluxe-room-details.html" class="solinom-btn">Read More <i class="icon-right-arrow-long"></i></a>
                        <div class="feature-three__item__element-top">
                            <img src="{{ asset('frontend/assets/images/shapes/frame-f-1-2.png') }}" alt>
                        </div>
                        <div class="feature-three__item__element-bottom">
                            <img src="{{ asset('frontend/assets/images/shapes/frame-f-1-1.png') }}" alt>
                        </div>
                        <div class="feature-three__item__element-hover">
                            <img src="{{ asset('frontend/assets/images/shapes/feature-3-1.png') }}" alt>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="feature-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='900ms'>
                        <div class="feature-three__item__icon">
                            <i class="icon-butter-1"></i>
                            <div class="feature-three__item__icon__element">
                                <img src="{{ asset('frontend/assets/images/shapes/shaper-2-1.png') }}" alt>
                            </div>
                        </div>
                        <h4 class="feature-three__item__title"><a href="room-details-3.html">daily Breakfast</a></h4>
                        <p class="feature-three__item__text">It is a long established fact that a reader will be distred by the readable </p>
                        <a href="deluxe-room-details.html" class="solinom-btn">Read More <i class="icon-right-arrow-long"></i></a>
                        <div class="feature-three__item__element-top">
                            <img src="{{ asset('frontend/assets/images/shapes/frame-f-1-2.png') }}" alt>
                        </div>
                        <div class="feature-three__item__element-bottom">
                            <img src="{{ asset('frontend/assets/images/shapes/frame-f-1-1.png') }}" alt>
                        </div>
                        <div class="feature-three__item__element-hover">
                            <img src="{{ asset('frontend/assets/images/shapes/feature-3-1.png') }}" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature section End -->

    <!--Room Section Start -->
    <section class="feature-five">
        <div class="container">
            <div class="sec-title text-center sec-title--two">

                <img src="{{asset('frontend/assets/images/shapes/sec-title-s-1.png')}}" alt="FEATURED ROOMS" class="sec-title__img">


                <h6 class="sec-title__tagline bw-split-in-right">FEATURED ROOMS</h6>

                <h3 class="sec-title__title bw-split-in-up">Discover Our Rooms</h3>
            </div>
            <div class="feature-five__carousel solinom-owl__carousel owl-carousel owl-theme solinom-owl__carousel--with-shadow" data-owl-options='{
            "items": 1,
            "margin": 0,
            "loop": true,
            "smartSpeed": 700,
            "nav": true,
            "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow2\"></span>"],
            "dots": false,
            "autoplay": true,
            "responsive": {
                "0": {
                    "items": 1
                },
                "768": {
                    "items": 2,
                    "margin": 30
                },
                "992": {
                    "items": 2,
                    "center": false,
                    "margin": 30
                },
                "1199": {
                    "items": 3,
                    "center": true,
                    "margin": 30
                }
            }
        }'>

                <div class="item">
                    <div class="feature-five-card  wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                        <div class="feature-five-card__inner">
                            <div class="feature-five-card__thumb">
                                <img src="{{asset('frontend/assets/images/room/feature-2-1.jpg')}}" alt="Master Suite Room">
                                <p class="feature-five-card__feature @@className">feature</p>
                                <div class="feature-five-card__thumb__popup">
                                    <div class="feature-five-card__thumb__popup__love">
                                        <i class="far fa-heart"></i>
                                    </div>
                                    <a href="https://www.youtube.com/watch?v=4jnzf1yj48M" class="feature-five-card__thumb__popup__item video-popup">
                                        <i class="icon-video-camera-1-1"></i>
                                    </a>
                                    <a href="{{asset('frontend/assets/images/room/feature-2-1.jpg')}}" class="feature-five-card__thumb__popup__item room-list-card-popup" data-gallery-options='{
                "items": [
                    {
                        "src": "{{ asset('frontend/assets/images/room/feature-2-1.jpg') }}"
                    },
                    {
                        "src": "{{ asset('frontend/assets/images/room/feature-2-2.jpg') }}"
                    },
                    {
                        "src": "{{ asset('frontend/assets/images/room/feature-2-3.jpg') }}"
                    }
                ],
                "gallery": {
                    "enabled": true
                },
                "type": "image"
            }'>
                                        <i class="icon-photo-camera-1"></i>
                                    </a>
                                </div>

                            </div>
                            <div class="feature-five-card__content">
                                <div class="feature-five-card__content__star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <h4 class="feature-five-card__content__title"><a href="deluxe-room-details.html">Master Suite Room</a></h4>
                                <p class="feature-five-card__content__text">There are many variations of passages of Lorem Ipsum aagtilable</p>
                            </div>
                            <div class="feature-five-card__content__number">
                                <div class="feature-five-card__content__number__price">$111.00/<span>night</span></div>
                                <p class="feature-five-card__content__number__parson">Person: <strong>12</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="feature-five-card  wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                        <div class="feature-five-card__inner">
                            <div class="feature-five-card__thumb">
                                <img src="{{asset('frontend/assets/images/room/feature-2-2.jpg')}}" alt="Master Suite Room">
                                <p class="feature-five-card__feature @@className">feature</p>
                                <div class="feature-five-card__thumb__popup">
                                    <div class="feature-five-card__thumb__popup__love">
                                        <i class="far fa-heart"></i>
                                    </div>
                                    <a href="https://www.youtube.com/watch?v=4jnzf1yj48M" class="feature-five-card__thumb__popup__item video-popup">
                                        <i class="icon-video-camera-1-1"></i>
                                    <a href="{{ asset('frontend/assets/images/room/feature-2-2.jpg') }}" class="feature-five-card__thumb__popup__item room-list-card-popup" data-gallery-options='{
                                        "items": [
                                            {
                                                "src": "{{ asset('frontend/assets/images/room/feature-2-1.jpg') }}"
                                            },
                                            {
                                                "src": "{{ asset('frontend/assets/images/room/feature-2-2.jpg') }}"
                                            },
                                            {
                                                "src": "{{ asset('frontend/assets/images/room/feature-2-3.jpg') }}"
                                            }
                ],
                "gallery": {
                    "enabled": true
                },
                "type": "image"
            }'>
                                        <i class="icon-photo-camera-1"></i>
                                    </a>
                                </div>

                            </div>
                            <div class="feature-five-card__content">
                                <div class="feature-five-card__content__star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <h4 class="feature-five-card__content__title"><a href="deluxe-room-details.html">Master Suite Room</a></h4>
                                <p class="feature-five-card__content__text">There are many variations of passages of Lorem Ipsum aagtilable</p>
                            </div>
                            <div class="feature-five-card__content__number">
                                <div class="feature-five-card__content__number__price">$111.00/<span>night</span></div>
                                <p class="feature-five-card__content__number__parson">Person: <strong>12</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="feature-five-card  wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                        <div class="feature-five-card__inner">
                            <div class="feature-five-card__thumb">
                                <img src="{{ asset('frontend/assets/images/room/feature-2-3.jpg') }}" alt="Triple Room">
                                <p class="feature-five-card__feature @@className">feature</p>
                                <div class="feature-five-card__thumb__popup">
                                    <div class="feature-five-card__thumb__popup__love">
                                        <i class="far fa-heart"></i>
                                    </div>
                                    <a href="https://www.youtube.com/watch?v=4jnzf1yj48M" class="feature-five-card__thumb__popup__item video-popup">
                                        <i class="icon-video-camera-1-1"></i>
                                    </a>
                                    <a href="{{ asset('frontend/assets/images/room/feature-2-3.jpg') }}" class="feature-five-card__thumb__popup__item room-list-card-popup" data-gallery-options='{
                "items": [
                    {
                        "src": "{{ asset('frontend/assets/images/room/feature-2-1.jpg') }}"
                    },
                    {
                        "src": "{{ asset('frontend/assets/images/room/feature-2-2.jpg') }}"
                    },
                    {
                        "src": "{{ asset('frontend/assets/images/room/feature-2-3.jpg') }}"
                    }
                ],
                "gallery": {
                    "enabled": true
                },
                "type": "image"
            }'>
                                        <i class="icon-photo-camera-1"></i>
                                    </a>
                                </div>

                            </div>
                            <div class="feature-five-card__content">
                                <div class="feature-five-card__content__star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <h4 class="feature-five-card__content__title"><a href="deluxe-room-details.html">Triple Room</a></h4>
                                <p class="feature-five-card__content__text">There are many variations of passages of Lorem Ipsum aagtilable</p>
                            </div>
                            <div class="feature-five-card__content__number">
                                <div class="feature-five-card__content__number__price">$111.00/<span>night</span></div>
                                <p class="feature-five-card__content__number__parson">Person: <strong>12</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="feature-five-card  wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                        <div class="feature-five-card__inner">
                            <div class="feature-five-card__thumb">
                                <img src="{{ asset('frontend/assets/images/room/feature-2-1.jpg') }}" alt="Master Suite Room">
                                <p class="feature-five-card__feature @@className">feature</p>
                                <div class="feature-five-card__thumb__popup">
                                    <div class="feature-five-card__thumb__popup__love">
                                        <i class="far fa-heart"></i>
                                    </div>
                                    <a href="https://www.youtube.com/watch?v=4jnzf1yj48M" class="feature-five-card__thumb__popup__item video-popup">
                                        <i class="icon-video-camera-1-1"></i>
                                    </a>
                                    <a href="{{ asset('frontend/assets/images/room/feature-2-1.jpg') }}" class="feature-five-card__thumb__popup__item room-list-card-popup" data-gallery-options='{
                "items": [
                    {
                        "src": "{{ asset('frontend/assets/images/room/feature-2-1.jpg') }}"
                    },
                    {
                        "src": "{{ asset('frontend/assets/images/room/feature-2-2.jpg') }}"
                    },
                    {
                        "src": "{{ asset('frontend/assets/images/room/feature-2-3.jpg') }}"
                    }
                ],
                "gallery": {
                    "enabled": true
                },
                "type": "image"
            }'>
                                        <i class="icon-photo-camera-1"></i>
                                    </a>
                                </div>

                            </div>
                            <div class="feature-five-card__content">
                                <div class="feature-five-card__content__star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <h4 class="feature-five-card__content__title"><a href="deluxe-room-details.html">Master Suite Room</a></h4>
                                <p class="feature-five-card__content__text">There are many variations of passages of Lorem Ipsum aagtilable</p>
                            </div>
                            <div class="feature-five-card__content__number">
                                <div class="feature-five-card__content__number__price">$111.00/<span>night</span></div>
                                <p class="feature-five-card__content__number__parson">Person: <strong>12</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="feature-five-card  wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                        <div class="feature-five-card__inner">
                            <div class="feature-five-card__thumb">
                                <img src="{{ asset('frontend/assets/images/room/feature-2-2.jpg') }}" alt="Master Suite Room">
                                <p class="feature-five-card__feature @@className">feature</p>
                                <div class="feature-five-card__thumb__popup">
                                    <div class="feature-five-card__thumb__popup__love">
                                        <i class="far fa-heart"></i>
                                    </div>
                                    <a href="https://www.youtube.com/watch?v=4jnzf1yj48M" class="feature-five-card__thumb__popup__item video-popup">
                                        <i class="icon-video-camera-1-1"></i>
                                    </a>
                                    <a href="{{ asset('frontend/assets/images/room/feature-2-2.jpg') }}" class="feature-five-card__thumb__popup__item room-list-card-popup" data-gallery-options='{
                "items": [
                    {
                        "src": "{{ asset('frontend/assets/images/room/feature-2-1.jpg') }}"
                    },
                    {
                        "src": "{{ asset('frontend/assets/images/room/feature-2-2.jpg') }}"
                    },
                    {
                        "src": "{{ asset('frontend/assets/images/room/feature-2-3.jpg') }}"
                    }
                ],
                "gallery": {
                    "enabled": true
                },
                "type": "image"
            }'>
                                        <i class="icon-photo-camera-1"></i>
                                    </a>
                                </div>

                            </div>
                            <div class="feature-five-card__content">
                                <div class="feature-five-card__content__star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <h4 class="feature-five-card__content__title"><a href="deluxe-room-details.html">Master Suite Room</a></h4>
                                <p class="feature-five-card__content__text">There are many variations of passages of Lorem Ipsum aagtilable</p>
                            </div>
                            <div class="feature-five-card__content__number">
                                <div class="feature-five-card__content__number__price">$111.00/<span>night</span></div>
                                <p class="feature-five-card__content__number__parson">Person: <strong>12</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="feature-five-card  wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                        <div class="feature-five-card__inner">
                            <div class="feature-five-card__thumb">
                                <img src="{{ asset('frontend/assets/images/room/feature-2-3.jpg') }}" alt="Triple Room">
                                <p class="feature-five-card__feature @@className">feature</p>
                                <div class="feature-five-card__thumb__popup">
                                    <div class="feature-five-card__thumb__popup__love">
                                        <i class="far fa-heart"></i>
                                    </div>
                                    <a href="https://www.youtube.com/watch?v=4jnzf1yj48M" class="feature-five-card__thumb__popup__item video-popup">
                                        <i class="icon-video-camera-1-1"></i>
                                    </a>
                                    <a href="{{ asset('frontend/assets/images/room/feature-2-3.jpg') }}" class="feature-five-card__thumb__popup__item room-list-card-popup" data-gallery-options='{
                "items": [
                    {
                        "src": "{{ asset('frontend/assets/images/room/feature-2-1.jpg') }}"
                    },
                    {
                        "src": "{{ asset('frontend/assets/images/room/feature-2-2.jpg') }}"
                    },
                    {
                        "src": "{{ asset('frontend/assets/images/room/feature-2-3.jpg') }}"
                    }
                ],
                "gallery": {
                    "enabled": true
                },
                "type": "image"
            }'>
                                        <i class="icon-photo-camera-1"></i>
                                    </a>
                                </div>

                            </div>
                            <div class="feature-five-card__content">
                                <div class="feature-five-card__content__star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <h4 class="feature-five-card__content__title"><a href="deluxe-room-details.html">Triple Room</a></h4>
                                <p class="feature-five-card__content__text">There are many variations of passages of Lorem Ipsum aagtilable</p>
                            </div>
                            <div class="feature-five-card__content__number">
                                <div class="feature-five-card__content__number__price">$111.00/<span>night</span></div>
                                <p class="feature-five-card__content__number__parson">Person: <strong>12</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-five__shape" style="background-image: url({{asset('frontend/assets/images/shapes/feature-2-1.png')}});"></div>
    </section>
    <!-- Room Section End -->


    <!-- Why Choose Section Start -->
    <section class="why-choose-one">
        <div class="why-choose-one__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url({{ asset('frontend/assets/images/backgrounds/why-choose-bg.jpg') }});"></div>
        <div class="container">
        <div class="sec-title text-center sec-title--two">

            <img src="{{ asset('frontend/assets/images/shapes/sec-title-s-1.png') }}" alt="Why choose us" class="sec-title__img">


            <h6 class="sec-title__tagline bw-split-in-right">Why choose us</h6>

            <h3 class="sec-title__title bw-split-in-up">Inspired Incentive</h3>
        </div>
        <div class="why-choose-one__inner" style="background-image: url({{ asset('frontend/assets/images/resources/why-choose-1-1.jpg') }});">
            <div class="why-choose-one__item">
            <div class="why-choose-one__left">
                <h4 class="why-choose-one__item__title">Beautiful Moments You will Never Forget</h4>
                <a href="about.html" class="why-choose-one__item__btn solinom-btn solinom-btn--base">Read More</a>
            </div>
            </div>
            <div class="why-choose-one__item">
            <div class="why-choose-one__middle">
                <ul class="why-choose-one__item__list">
                <li>
                    <div class="why-choose-one__item__icon">
                    <i class="icon-car-wash-1"></i>
                    </div>
                    <div class="why-choose-one__item__content">
                    <h5 class="why-choose-one__item__content__title">Airport Pickup</h5>
                    <p class="why-choose-one__item__content__text">It is a long established fact that a reader will be distra</p>
                    </div>
                </li>
                <li>
                    <div class="why-choose-one__item__icon">
                    <i class="icon-car-1"></i>
                    </div>
                    <div class="why-choose-one__item__content">
                    <h5 class="why-choose-one__item__content__title">Free Parking</h5>
                    <p class="why-choose-one__item__content__text">It is a long established fact that a reader will be distra</p>
                    </div>
                </li>
                <li>
                    <div class="why-choose-one__item__icon">
                    <i class="icon-swimming-pool-1"></i>
                    </div>
                    <div class="why-choose-one__item__content">
                    <h5 class="why-choose-one__item__content__title">Outdoor Pool</h5>
                    <p class="why-choose-one__item__content__text">It is a long established fact that a reader will be distra</p>
                    </div>
                </li>
                </ul>

                <div class="why-choose-one__middle__shape-one">
                <img src="{{ asset('frontend/assets/images/shapes/why-choose-1-2.png') }}" alt>
                </div>
                <div class="why-choose-one__middle__shape-two">
                <img src="{{ asset('frontend/assets/images/shapes/why-choose-1-3.png') }}" alt>
                </div>
                <div class="why-choose-one__middle__element-one">
                <img src="{{ asset('frontend/assets/images/shapes/why-choose-1-1.png') }}" alt>
                </div>
                <div class="why-choose-one__middle__element-two">
                <img src="{{ asset('frontend/assets/images/shapes/why-choose-1-1.png') }}" alt>
                </div>
            </div>
            </div>
            <div class="why-choose-one__item">
            <div class="why-choose-one__right">
                <div class="why-choose-one__item__funfact count-box">
                <div class="why-choose-one__item__funfact__icon">
                    <i class="icon-travelling-2"></i>
                </div>
                <h2 class="why-choose-one__item__funfact__count">
                    <span class="count-text" data-stop="7300" data-speed="1500"></span>
                    <span>+</span>
                </h2>
                <p class="why-choose-one__item__funfact__text">Guests Visit Out Hotel Every Month</p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Why Choose Section End -->

  

    <!-- Instagram section Start -->
    <section class="instagram-two">
        <div class="container-fluid">
            <ul class="instagram-two__list list-unstyled">
                <li class="instagram-two__list__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                    <div class="instagram-two__list__item__image">
                        <img src="{{ asset('frontend/assets/images/instagram/instagram-1-1.jpg') }}" alt="firdip image">
                        <div class="instagram-two__list__item__image__hover">
                            <a href="https://www.instagram.com/">
                                <span class="icon-instagram"></span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="instagram-two__list__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                    <div class="instagram-two__list__item__image">
                        <img src="{{ asset('frontend/assets/images/instagram/instagram-1-2.jpg') }}" alt="firdip image">
                        <div class="instagram-two__list__item__image__hover">
                            <a href="https://www.instagram.com/">
                                <span class="icon-instagram"></span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="instagram-two__list__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='700ms'>
                    <div class="instagram-two__list__item__image">
                        <img src="{{ asset('frontend/assets/images/instagram/instagram-1-3.jpg') }}" alt="firdip image">
                        <div class="instagram-two__list__item__image__hover">
                            <a href="https://www.instagram.com/">
                                <span class="icon-instagram"></span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="instagram-two__list__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='800ms'>
                    <div class="instagram-two__list__item__image">
                        <img src="{{ asset('frontend/assets/images/instagram/instagram-1-4.jpg') }}" alt="firdip image">
                        <div class="instagram-two__list__item__image__hover">
                            <a href="https://www.instagram.com/">
                                <span class="fab fa-instagram"></span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="instagram-two__list__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1000ms'>
                    <div class="instagram-two__list__item__image">
                        <img src="{{ asset('frontend/assets/images/instagram/instagram-1-5.jpg') }}" alt="firdip image">
                        <div class="instagram-two__list__item__image__hover">
                            <a href="https://www.instagram.com/">
                                <span class="icon-instagram"></span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="instagram-two__line"></div>
    </section>
    <!-- Instagram section End -->

    




@endsection