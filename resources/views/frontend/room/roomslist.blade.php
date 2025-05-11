@foreach ( $rooms as $room )
            <div class="col-md-4 col-sm-6">
                <div class="room-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="room-card__thumb">
                        @if ($room->images->isNotEmpty())
                            <img src="{{ asset('storage/' . $room->images->first()->ImageURL) }}" alt="Room Image">
                        @else
                            <img src="{{ asset('frontend/assets/images/room/room-l-1-1.jpg') }}" alt="No Image Available">
                        @endif
                        <p class="room-card__feature">Featured</p>
                        <div class="room-card__love">
                            <i class="icon-Heart"></i>
                        </div>
                    </div>
                    <div class="room-card__top">
                        <div class="room-card__top__inner">
                            <div class="room-card__top__popup">
                                <a href="https://www.youtube.com/watch?v=4jnzf1yj48M" class="room-card__top__popup__item video-popup">
                                    <i class="icon-video-camera-1-1"></i>
                                </a>
                                
                                @if ($room->images->isNotEmpty())
                                <a class="room-card__top__popup__item room-list-card-popup" href="#" 
                                   data-gallery-options='{
                                        "items": [
                                            @foreach ($room->images as $image)
                                                { "src": "{{ asset('storage/' .$image->ImageURL) }}" }{{ !$loop->last ? "," : "" }}
                                            @endforeach
                                        ],
                                        "gallery": {
                                            "enabled": true
                                        },
                                        "type": "image"
                                    }'>
                                    <span class="icon-photo-camera-1"></span>
                                </a>
                            @endif
                            
                            </div>
                            <div class="room-card__top__price">
                                <span class="room-card__top__price__content">{{ $room->price_per_night }}</span>
                                <p class="room-card__top__price__text">LKR</p>
                            </div>
                        </div>
                    </div>
                    <div class="room-card__content">
                        <div class="room-card__content__inner__element"></div>
                        <h4 class="room-card__content__title"><a href="room-details-3.html">{{ $room->room_type }} Room</a></h4>
                        <p class="room-card__content__text">{{$room->overview}}</p>
                        <div class="room-card__content__star">
                            <div class="room-card__content__star__item">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p class="room-card__content__star__parson">Person: <strong>{{$room->capacity}}</strong></p>
                        </div>
                        
                        <a href="roomshow/{{$room->id}}" class="room-card__content__btn solinom-btn">Book Now</a>

                        <div class="room-card__content__element">
                            <img src="{{asset('frontend/assets/images/shapes/room-1-1.png')}}" alt>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach