@extends('layouts.app')

@section('content')
<div class="container">
    <div id="homepage-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#homepage-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#homepage-carousel" data-slide-to="1"></li>
            <li data-target="#homepage-carousel" data-slide-to="2"></li>
        </ol>

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/carousel/slide1.jpg') }}" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/carousel/slide2.jpg') }}" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/carousel/slide3.jpg') }}" class="d-block w-100" alt="Slide 3">
            </div>
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#homepage-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#homepage-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row mt-4">
        <div class="col-md-12 text-center">
            <h1>Welcome to SpaceLet Marketplace</h1>
            <p>Find and book the perfect workspace for your needs.</p>
            <a href="{{ route('listings.index') }}" class="btn btn-primary">Browse Listings</a>
        </div>
    </div>
</div>
@endsection
