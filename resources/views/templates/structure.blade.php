<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-2">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route("batiment") }}">Batiment</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route("formation") }}">Formations</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route("typesformation") }}">Types de formations</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route("eleve") }}">Eleves</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    @yield('content')
</body>

</html>
