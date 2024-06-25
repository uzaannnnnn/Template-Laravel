<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $header }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar bg-primary navbar-expand-lg w-50 mx-auto mt-2 rounded-pill px-4 mb-5" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand">{{ $header }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav gap-3 mx-3">
                    <li class="nav-item">
                        <a class="align-middle link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                            aria-current="page" href="/">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="align-middle link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                            aria-current="page" href="/library">Library</a>
                    </li>
                    <li class="nav-item">
                        <a class="align-middle link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                            aria-current="page" href="/login">Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    @if (session('success-status'))
        <div class="alert alert-success alert-dismissible fade show my-3 w-50 mx-auto" role="alert">
            {{ session('success-status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif(session('danger-status'))
        <div class="alert alert-danger alert-dismissible fade show my-3 w-50 mx-auto" role="alert">
            {{ session('danger-status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @yield('main')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
