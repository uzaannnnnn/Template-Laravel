<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet"
        integrity="sha384
QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
crossorigin="anonymous">
</head>

<body class="d-flex align-items-center justify-content-center vh-100">
    <div class="card mb-3 mx-auto border border-4 border-top-0 border-bottom-0
border-primary rounded-5 w-25"
        style="width: 18rem;">
        <div class="card-body">
            <h3 class="card-title text-center mb-5">LOGIN</h3>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email"
placeholder="Enter Email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password"
placeholder="Enter Password">
                </div>
                <div class="d-flex">
                    <div class="col mt-4 px-4">
                        <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                    </div>
                    <div class="col mt-4 justify-content-end d-flex px-4">
                        <button class="btn btn-primary"type="submit">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
 "
        integrity="sha384
YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous">
    </script>
</body>

</html>
