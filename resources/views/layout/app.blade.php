<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Checkout example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body class="bg-light">
<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item @if(Request::url() == route('index')) active @endif"  >
                    <a class="nav-link" href="{{ route('index') }}">Index <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item @if(Request::url() == route('create')) active @endif">
                    <a class="nav-link" href="{{ route('create') }}">Create</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<br>

@yield('content')

</body>
</html>