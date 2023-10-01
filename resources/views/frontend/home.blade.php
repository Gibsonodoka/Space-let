@extends('layouts.app')

@section('content')
<div class="container">
    <div class="carousel-container">
        <div class="carousel-slide">
            <img src="{{ asset('images/carousel/slide1.jpg') }}" alt="Slide 1">
        </div>
        <div class="carousel-slide">
            <img src="{{ asset('images/carousel/slide2.jpg') }}" alt="Slide 2">
        </div>
        <div class="carousel-slide">
            <img src="{{ asset('images/carousel/slide3.jpg') }}" alt="Slide 3">
        </div>

        <!-- Slider direction buttons -->
        <a class="carousel-control-prev" href="#homepage-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#homepage-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

        <!-- Custom class for carousel indicators -->
        <ol class="custom-carousel-indicators">
            <li data-target="#homepage-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#homepage-carousel" data-slide-to="1"></li>
            <li data-target="#homepage-carousel" data-slide-to="2"></li>
        </ol>
    </div>

    <div class="row mt-4">
        <div class="col-md-12 text-center">
            <h1>Welcome to SpaceLet Marketplace</h1>
            <p>Find and book the perfect workspace for your needs.</p>
            <a href="{{ route('listings.index') }}" class="btn btn-primary">Browse Listings</a>
        </div>
    </div>
</div>

<script src="{{ asset('js/main.js') }}"></script> <!-- Include your custom JavaScript file -->
@endsection
