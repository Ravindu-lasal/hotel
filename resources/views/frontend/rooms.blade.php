@extends('frontend.layouts.master')

@section('content')
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ asset('frontend/assets/images/backgrounds/header-bg.jpg') }});"></div>
    <div class="container">
        <img src="{{ asset('frontend/assets/images/shapes/page-header-s-1.png')}}" alt="Top Search" class="page-header__shape">
        <h2 class="page-header__title">Top Search</h2>
        <ul class="solinom-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Top Search</span></li>
        </ul>
    </div>
</section>

@include('frontend.room.search')

@foreach ($rooms as $room )
    
@endforeach
<section class="room-two-page">
    <div class="container">
        <div class="room__info-top">
            <div class="room__showing-text-box">
                <p class="room__showing-text">{{ $rooms->total() }} Rooms</p>
            </div>
            <div class="room__showing-sort">
                <select class="selectpicker" aria-label="Sort by popular">
                    <option selected>Short By Rating</option>
                    <option value="1">Sort by view</option>
                    <option value="2">Sort by price</option>
                    <option value="3">Sort by ratings</option>
                </select>
            </div>
        </div>

        <div class="row gutter-y-30">
            
            @include('frontend.room.roomslist')
           
            <div class="col-12">
                {{ $rooms->links('frontend.vendor.pagination') }}
            </div>
            
        </div>
    </div>
</section>


@endsection