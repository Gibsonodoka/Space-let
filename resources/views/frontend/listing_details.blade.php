@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Listing Details</h2>

            <!-- Display listing details here -->
            <div class="listing-details">
                <h3>{{ $listing->title }}</h3>
                <img src="{{ asset('path_to_listing_image.jpg') }}" alt="{{ $listing->title }}" class="listing-image">
                <p>{{ $listing->description }}</p>
                <p>Location: {{ $listing->location }}</p>
                <p>Price: ${{ $listing->price }}</p>
                <!-- Include more details as needed -->
            </div>
        </div>
    </div>
</div>
@endsection
