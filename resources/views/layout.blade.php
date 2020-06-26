<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Le Corbier</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{'/js/js.js'}}" defer></script>

    <link rel="stylesheet" href="/css/css.css">

</head>
<body>

<div class="container">

    <nav class="navbar navbar-expand-md bg-info navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">Le Corbier</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pistes">Pistes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/units">Accomodaties</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Info</a>
                </li>
            </ul>
        </div>
    </nav>




    <div class="container">
        <div class="row text-secondary">

            <div class="hoofd hidden-xs hidden-sm hidden-md col-lg-12 text-center text-secondary h-100 img-fluid">


                <h1>Le Corbier</h1>
                <p>Het overzichtelijke en gezellige familiegebied. <br> Alles voor een zorgeloze vakantie met de kinderen.</p>
                <!--Large-->
            </div>
        </div>


    </div>
    @yield('content')
</div>

</body>
</html>
