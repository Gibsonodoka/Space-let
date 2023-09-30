@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Welcome to SPacelet</h1>
            <p>Find and book the perfect workspace for your needs.</p>
            <a href="{{ route('listings.index') }}" class="btn btn-primary">Browse Listings</a>
        </div>
    </div>
</div>
@endsection
