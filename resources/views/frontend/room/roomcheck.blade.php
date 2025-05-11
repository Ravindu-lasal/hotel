<div class="room-details__sidebar">
    <div class="room-details__sidebar__item room-details__sidebar__item--three wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
        <div class="room-details__sidebar__form">
            <div class="room-details__sidebar__top">
                <div class="room-details__sidebar__top__item">
                    <h4 class="room-details__sidebar__top__title">Book Room</h4>
                </div>
            </div>
            <div class="room-details__sidebar__content">
                <form class="room-details__sidebar__form__inner" action="/check" method="get" novalidate="novalidate">
                    @csrf
                    <input type="hidden" name="room_id" value="{{ $room->id }}">
                    <div class="room-details__sidebar__control">
                        <label for="checkin">From:</label>
                        <input class="solinom-datepicker" id="checkin" type="text" name="checkin">
                        <i class="icon-calendar-6"></i>
                    </div>
                    <div class="room-details__sidebar__control">
                        <label for="checkout">To:</label>
                        <input class="solinom-datepicker" id="checkout" type="text" name="checkout">
                        <i class="icon-calendar-6"></i>
                    </div>
                    <div class="room-details__sidebar__control">
                        <label for="guests">Guests</label>
                        <select name="guests" class="selectpicker" id="guests">
                            @for ($index = 1; $index <= $room->capacity; $index++)
                                <option value="{{$index}}">{{$index}}</option>
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
                    <div class="room-details__sidebar__total">Total:<span>LKR 160.00</span></div>
                    <button type="submit" class="solinom-btn solinom-btn--base">Book Now</button>
                    
                </form>
            </div>
        </div>
    </div>

</div>