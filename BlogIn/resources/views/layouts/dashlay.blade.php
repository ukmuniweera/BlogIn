<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bloging Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
</head>

<body>
    <header class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}">Bloging Dashboard</a>
            <div class="d-flex">
                <a class="btn btn-outline-light me-2" href="{{ route('post.getall') }}">All Posts</a>
                <a class="btn btn-outline-light me-2" href="{{ route('update.form') }}">Update Account</a>
                <a class="btn btn-outline-danger me-2" href="{{ route('user.delete') }}">Delete Account</a>
                <a class="btn btn-outline-warning" href="{{ route('user.logout') }}">Logout</a>
            </div>
        </div>
    </header>

    <main class="container my-5">
        @if (session('session'))
            <div class="alert alert-success">{{ session('session') }}</div>
        @endif
        @yield('content')
    </main>

    <footer class="bg-dark text-white py-4 text-center mt-auto">
        <p>Bloging Dashboard &copy; {{ date('Y') }}</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
