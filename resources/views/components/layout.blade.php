<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <script src="{{ URL::asset('js/app.js') }}"></script>
    <title>Laragigs</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger" style="--bs-bg-opacity: .5;">
        <div class="container-fluid">
            <a class="navbar-brand text-black" href="#"><span class="text-muted">lara</span>gigs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-3 justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link mx-2" href="#">Register</a>
                    <a class="nav-link mx-2" href="#">Login</a>
                </div>
            </div>
        </div>
    </nav>
    {{-- VIEW LAYOUT --}}
    <main>
        {{$slot}}
    </main>

    <footer>
        <nav class="navbar navbar-light bg-danger" style="--bs-bg-opacity: .5;">
            <div class="container-fluid">
                <a class="text-decoration-none text-center text-dark col-auto" href="#">Copyright &copy; 2022, Allright reserved </a>
                <a type="button" class="btn btn-dark" >Post Job</a>
            </div>
        </nav>
    </footer>
</body>

</html>