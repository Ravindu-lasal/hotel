<div class="banner-form banner-form-top">
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
                                <input id="children" type="text" value="1">
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
                                <label class="title-select">Type</label>
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