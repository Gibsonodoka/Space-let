<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpaceLet Marketplace</title>

    <!-- Include Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Include Your Custom CSS -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    
</head>
<body>
    <header>
        <!-- Navbar (Bootstrap Navbar Example) -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">SpaceLet Marketplace</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto login-signup">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item custom-list-space">
                            <a class="nav-link" href="{{ route('listings.index') }}">List Space</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('signup') }}">Signup</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        @yield('content')
    </main>

    <!-- Include Bootstrap JavaScript (optional) -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Include Your Custom JavaScript (if any) -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
