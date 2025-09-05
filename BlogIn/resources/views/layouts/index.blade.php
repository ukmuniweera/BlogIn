<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bloging</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
</head>

<body>
    <header class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('post.show') }}">Bloging</a>
            <div class="d-flex">
                <a class="btn btn-outline-primary me-2" href="{{ route('login.form') }}">Login</a>
                <a class="btn btn-outline-success" href="{{ route('register.form') }}">Register</a>
            </div>
        </div>
    </header>

    <main class="container my-5">
        @yield('content')
    </main>

    <footer class="bg-light py-4 mt-auto text-center">
        <p>Bloging &copy; {{ date('Y') }} | Developed By <a href="https://ukmuniweera.netlify.app/">Udula</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
