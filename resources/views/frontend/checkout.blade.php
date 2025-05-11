@extends('frontend.layouts.master')
   
@section('content')

   <!-- Checkout Start -->
   <section class="checkout-page">
    <div class="container">
        <div class="checkout-page__notice">Massage show <a href="#"> Click Here to Enter Your Code</a></div>
        <form action="/bookings" method="POST">
            @csrf
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="room-details__sidebar">
                        <div class="room-details__sidebar__item room-details__sidebar__item--three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                            <div class="room-details__sidebar__form">
                                <div class="room-details__sidebar__top">
                                    <div class="room-details__sidebar__top__item">
                                        <h4 class="room-details__sidebar__top__title">Book Room</h4>
                                    </div>
                                </div>
                                <div class="room-details__sidebar__content">
                                    <div class="room-details__sidebar__form__inner">
                                        <input type="hidden" name="room_id" value="{{ $room->id }}">
                                        <div class="room-details__sidebar__control">
                                            <label for="checkin">From:</label>
                                            <input class="solinom-datepicker" id="checkin" type="text" name="check_in_date" value="{{ $bookingData['checkin'] }}" >
                                            <i class="icon-calendar-6"></i>
                                        </div>
                                        <div class="room-details__sidebar__control">
                                            <label for="checkout">To:</label>
                                            <input class="solinom-datepicker" id="checkout" type="text" name="check_out_date" value="{{ $bookingData['checkout'] }}" >
                                            <i class="icon-calendar-6"></i>
                                        </div>
                                        <div class="room-details__sidebar__control">
                                            <label for="number_of_guest">Guests</label>
                                            <select name="number_of_guest" class="selectpicker" id="number_of_guest">
                                                @for ($index = 1; $index <= $room->capacity; $index++)
                                                    <option value="{{$index}}" {{ $bookingData['guests'] == $index ? 'selected' : '' }}>{{$index}}</option>
                                                @endfor
                                                
                                                
                                            </select>
                                        </div>
                                        <div class="room-details__sidebar__control">
                                            <label for="guests">Add Extra</label>
                                            <ul class="room-details__sidebar__checkbox list-unstyled">
                                                <li>
                                                    <input type="checkbox" name="select01" id="select01">
                                                    <label for="select01">Add Dinner<span>LKR 4000.00</span></label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="select02" id="select02">
                                                    <label for="select02">Children (3-12 years) <span>LKR 2000.00</span></label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="room-details__sidebar__total">Total:<span>{{ $room->price_per_night }}</span></div>
                                        <input type="hidden" name="total_price" value="{{ $room->price_per_night }}">
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="checkout-page__billing-address">
                        <h2 class="checkout-page__billing-address__title">Add booking Details</h2>
                        <div class="checkout-page__form">
                            <div class="row bs-gutter-x-20">
                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <input type="text" name="first_name" value="" placeholder="Frist Name" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <input type="text" name="last_name" value="" placeholder="Last Name" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <input type="email" name="email" value="" placeholder="Email Address" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <input type="tel" name="phone" required="" placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="checkout-page__input-box">
                                        <input type="text" name="company" value="" placeholder="Company">
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="checkout-page__shipping-address">
                        <h2 class="checkout-page__shipping-address__title">Additional Information</h2>
                        <div class="checkout-page__form">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="checkout-page__input-box">
                                        <textarea placeholder="Write a Message" name="message"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- /.checkout-page__details -->
            <div class="checkout-page__your-order">
                    <div class="text-right d-flex justify-content-end">
                        <button type="submit" class="solinom-btn solinom-btn--base">Booking Your Room</button>
                    </div><!-- /.text-right -->
            </div>
        </form>
    </div>
</section>
<!-- Checkout End -->

@endsection