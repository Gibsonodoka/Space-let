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


    <div class="home-section spacelet-bg-color">
        <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Discover Your Ideal <span class="highlight-text">Workspace</span></h2>
                    <p>Explore our curated selection of workspaces to find the one that suits you best.</p>
                </div>
        </div>
        <div class="row">
        <div class="col-md-3">
            <div class="image-box">
                <img src="{{ asset('images/recommended/space1.jpg') }}" alt="Image 1">
                <h5>Clean and Perfect Workspace</h5>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('images/recommended/user-icon.png') }}" alt="User Thumbnail" class="user-thumbnail">
                    </div>
                    <div class="col-md-8">
                        <p class="user-info">User Name</p>
                        <p class="user-info">Location</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="user-review">User Review</p>
                    </div>
                    <div class="col-md-6">
                        <p class="cost">Cost of Workspace</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="tags">Tags: Power, Internet, Serene</p>
                    </div>
                </div>
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
                    <img src="{{ asset('images/recommended/space5.jpg') }}" alt="Image 1">
                    <p>Text for Image 5</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="image-box">
                    <img src="{{ asset('images/recommended/space6.jpg') }}" alt="Image 2">
                    <p>Text for Image 6</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="image-box">
                    <img src="{{ asset('images/recommended/space7.jpg') }}" alt="Image 3">
                    <p>Text for Image 7</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="image-box">
                    <img src="{{ asset('images/recommended/space8.jpg') }}" alt="Image 4">
                    <p>Text for Image 8</p>
                </div>
            </div>
            <!-- Repeat the same structure for additional columns -->
        </div>
    </div>
</div>

<script src="{{ asset('js/main.js') }}"></script> <!-- Include your custom JavaScript file -->
@endsection
