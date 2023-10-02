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
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="location">Location</label>
                            <input type="text" id="location" name="location" class="form-control" placeholder="Enter location">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="date">Date</label>
                            <input type="date" id="date" name="date" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="capacity">Capacity</label>
                            <input type="number" id="capacity" name="capacity" class="form-control" placeholder="Enter capacity">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>

            </div>

            <!-- Custom carousel booking form 
            <form action="{{ route('bookings.store') }}" method="POST" class="custom-carousel-form">
                @csrf
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="workspace">Workspace</label>
                    <select id="workspace" name="workspace" class="form-control" required>
                        <option value="workspace1">Workspace 1</option>
                        <option value="workspace2">Workspace 2</option>
                         
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Book Now</button>
            </form>
-->
        </div>
        <!-- Add more carousel slides with custom class names as needed 
        <div class="carousel-slide">
            <img src="{{ asset('images/carousel/slide2.jpg') }}" alt="Slide 2">
        </div>
        <div class="carousel-slide">
            <img src="{{ asset('images/carousel/slide3.jpg') }}" alt="Slide 3">
        </div>
        
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
