@extends('layouts.app')

@section('content')
<div class="container">
    <div class="carousel-container">
        <div class="carousel-slide">
            <img src="{{ asset('images/carousel/slide1.jpg') }}" alt="Slide 1">
            
            <!-- Custom carousel text -->
            <div class="custom-carousel-text">
                <h2>Search For Workspace</h2>
                <p>Find the perfect workspace for your needs and book it today.</p>
                <form action="{{ route('search') }}" method="GET" class="custom-search-form">
                    @csrf
                    <div class="custom-search-inputs">
                        <div class="custom-search-input">
                        <select id="location" name="location" class="custom-input">
                            <option value="Port Harcourt">Select location</option>
                            <option value="Port Harcourt">Port Harcourt</option>
                            <option value="Lagos">Lagos</option>
                            <option value="Abuja">Abuja</option>
                        </select>
                        </div>
                        <button type="submit" class="btn custom-search-button">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Add more carousel slides with custom class names as needed
        <div class="carousel-slide">
            <img src="{{ asset('images/carousel/slide2.jpg') }}" alt="Slide 2">
        </div>
        <div class="carousel-slide">
            <img src="{{ asset('images/carousel/slide3.jpg') }}" alt="Slide 3">
        </div>
                -->
    </div>

    <div class="row mt-4">
        <div class="col-md-12 text-center">
            <h1>Welcome to SpaceLet Marketplace</h1>
            <p>Find and book the perfect workspace for your needs.</p>
            <a href="{{ route('listings.index') }}" class="btn btn-primary">Browse Listings</a>
        </div>
    </div>

    <div class="home-section">
        <div class="row">
            <div class="col-md-3">
                <div class="image-box">
                    <img src="{{ asset('images/recommended/space1.jpg') }}" alt="Image 1">
                    <p>Text for Image 1</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="image-box">
                    <img src="{{ asset('images/recommended/space2.jpg') }}" alt="Image 2">
                    <p>Text for Image 2</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="image-box">
                    <img src="{{ asset('images/recommended/space3.jpg') }}" alt="Image 3">
                    <p>Text for Image 3</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="image-box">
                    <img src="{{ asset('images/recommended/space4.jpg') }}" alt="Image 4">
                    <p>Text for Image 4</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="image-box">
                    <img src="{{ asset('images/recommended/space5.jpg') }}" alt="Image 5">
                    <p>Text for Image 5</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="image-box">
                    <img src="{{ asset('images/recommended/space6.jpg') }}" alt="Image 6">
                    <p>Text for Image 6</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="image-box">
                    <img src="{{ asset('images/your-image7.jpg') }}" alt="Image 7">
                    <p>Text for Image 7</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="image-box">
                    <img src="{{ asset('images/your-image8.jpg') }}" alt="Image 8">
                    <p>Text for Image 8</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/main.js') }}"></script> <!-- Include your custom JavaScript file -->
@endsection
