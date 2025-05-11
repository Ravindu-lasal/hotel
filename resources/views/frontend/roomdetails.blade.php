@extends('frontend.layouts.master')

@section('content')

<!-- Gallery Top start -->
<div class="gallery-top">
    <div class="gallery-top__carousel solinom-owl__carousel owl-carousel owl-theme" data-owl-options='{
        "items": 1,
        "margin": 0,
        "loop": true,
        "smartSpeed": 700,
        "nav": false, 
        "dots": false,
        "autoplay": true,
        "responsive": {
            "0": {
                "items": 1
            },
            "576": {
                "items": 2,
                "margin": 20
            },
            "992": {
                "items": 3,
                "margin": 20
            },
            "992": {
                "items": 4,
                "margin": 20
            }
        }
        }'>
    @foreach ($room->images as $image )
        <div class="item">
            <div class="gallery-top__card">
                <img src="{{ asset('storage/' .$image->ImageURL) }}" alt="solinom image">
            </div>
        </div>
    @endforeach
        
        
    </div>
</div>
<!-- Gallery Top End -->


<div class="room-details">
    <div class="container">
        <div class="row gutter-y-30">
            <div class="col-lg-8">
                <div class="room-details__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                    <div class="room-details__room-info">
                        <div class="room-details__room-info__top">
                            <div class="room-details__room-info__left">
                                <h2 class="room-details__room-info__title">{{ $room->room_type }} Room</h2>
                                <p class="room-details__room-info__form">From <span>{{ $room->price_per_night }}</span> Per Night</p>
                            </div>
                            <p class="room-details__room-info__rating"><i class="icon-star1"></i> 4.8(4 Reviews)</p>
                        </div>
                        <div class="room-details__room-info__bottom">
                            <div class="room-details__room-info__bottom__left">
                                <div class="room-details__room-info__bottom__item">
                                    <div class="room-details__room-info__bottom__icon">
                                        <i class="icon-audience"></i>
                                    </div>
                                    <div class="room-details__room-info__bottom__content">
                                        <h5 class="room-details__room-info__bottom__title">{{ $room->capacity }}</h5>
                                        <span class="room-details__room-info__bottom__subtitle">Guests</span>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="room-details__room-info__bottom__right">
                                <a href="javascript:void(0)" class="room-details__room-info__bottom__right__item"><i class="icon-Heart"></i></a>
                                <a href="javascript:void(0)" class="room-details__room-info__bottom__right__item"><i class="icon-share"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="room-details__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                    <div class="room-details__info">
                        <h3 class="room-details__title">Overview</h3>
                        <p class="room-details__text">{{$room->overview}}</p>
                    </div>
                </div>
                <div class="room-details__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                    <div class="room-details__feature-one">
                        <div class="row gutter-x-50 gutter-y-30">
                            <div class="col-md-6">
                                <h3 class="room-details__title">Advance Facilities</h3>
                                <p class="room-details__text">{{ $room->advance_facilities }} </p>
                            </div>
                            <div class="col-md-6">
                                <h3 class="room-details__title">Challenge</h3>
                                <p class="room-details__text">{{ $room->challenge }} </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="room-details__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                    <div class="room-details__amenities">
                        <h3 class="room-details__title">Amenities</h3>
                        <ul class="room-details__amenities__list list-unstyled">
                            <li class="room-details__amenities__item"><i class="icon-mark"></i>Conditioning</li>
                            <li class="room-details__amenities__item"><i class="icon-mark"></i>Lawn</li>
                            <li class="room-details__amenities__item"><i class="icon-mark"></i>TV Cable</li>
                            <li class="room-details__amenities__item"><i class="icon-mark"></i>Barbeque</li>
                            <li class="room-details__amenities__item"><i class="icon-mark"></i>Microwave</li>
                            <li class="room-details__amenities__item"><i class="icon-mark"></i>Washer</li>
                            <li class="room-details__amenities__item"><i class="icon-mark"></i>Dryer</li>
                            <li class="room-details__amenities__item"><i class="icon-mark"></i>Refrigerator</li>
                            <li class="room-details__amenities__item"><i class="icon-mark"></i>WiFi</li>
                            <li class="room-details__amenities__item"><i class="icon-mark"></i>Gym</li>
                            <li class="room-details__amenities__item"><i class="icon-close"></i>Sauna</li>
                            <li class="room-details__amenities__item"><i class="icon-mark"></i>Window Coverings</li>
                            <li class="room-details__amenities__item"><i class="icon-close"></i>Laundry</li>
                            <li class="room-details__amenities__item"><i class="icon-mark"></i>Swimming Pool</li>
                        </ul>
                    </div>
                </div>
               
            </div>
            <div class="col-lg-4">
                @include('frontend.room.roomcheck')
            </div>  
        </div>
    </div>
</div>



@endsection