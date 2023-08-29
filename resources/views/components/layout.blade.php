<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

    <script src="{{ URL::asset('js/app.js') }}"></script>
    <script src="{{ URL::asset('packages/bootstrap/dist/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ URL::asset('packages/@fortawesome/fontawesome-free/js/all.js') }}"></script>
    <title>Laragigs</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger" style="--bs-bg-opacity: .5;">
        <div class="container-fluid">
            <a class="navbar-brand text-black" href="/"><span class="text-muted">lara</span>gigs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-3 justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    @auth
                        <a class="nav-link mx-2" href="#">Welcome {{auth()->user()->name}}</a>
                        <a class="nav-link mx-2" href="/listings/manage"><i class="fa-solid fa-gear"></i> Manage Listings</a>
                        <form class="" method="POST" action="/logout">
                            @csrf
                            <button type="submit" class="btn" >
                                <i class="fa-solid fa-door-closed"></i> Logout
                            </button>
                        </form>
                    @else
                        <a class="nav-link mx-2" href="/register">Register</a>
                        <a class="nav-link mx-2" href="/login">Login</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
    {{-- VIEW LAYOUT --}}
    <main class="mb-5">
        {{$slot}}
    </main>

    <footer>
        <x-flash-message/>
        <nav class="navbar navbar-light fixed-bottom" style="background-color: rgb(218, 107, 96);">
            <div class="container-fluid">
                <a class="text-decoration-none text-center text-dark col-auto" href="#">Copyright &copy; 2022, Allright reserved </a>
                <a href="/listings/create" type="button" class="btn btn-dark" >Post Job</a>
            </div>
        </nav>
    </footer>
</body>

</html>