<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
</head>
<body>
    <nav>
        <section id="nav_container">
            <div class="link"> <img src="" alt="Sewables logo" id="sewables_logo_nav"> </div>
            <div class="link"> <a class="link" href="./"> Home </a> </div>
            <div class="link"> <a class="link" href="./projects"> Projects </a> </div>
            <div class="link"> <a class="link" href="./admin"> Admin Page </a> </div>
            <div class="link"> <a class="link" href="./user"> User Page </a> </div>

            <div class="dropdown">
                <button class="dropbtn"> <img src="{{ asset('pic/hamburger-menu.svg') }}" alt="Hamburger menu picture" id="hamburger_icon"></button>
                <div class="dropdown-content">
                    <a href="../home">Log in</a>
                </div>
            </div>
        </section>
    </nav>

    <header>
        <section class="slideshow_container">
            <div id="slideshow">
                <div class="slide-wrapper">
                    <div class="slide"> <img alt="Picture of cool sewing project" class="slider-pic" src="{{ asset('pic/black_dress.jpg') }}"> </div>
                    <div class="slide"> <img alt="Picture of cool sewing project" class="slider-pic" src="{{ asset('pic/dress.jpg') }}"> </div>
                    <div class="slide"> <img alt="Picture of cool sewing project" class="slider-pic" src="{{ asset('pic/keybobs.jpg') }}"> </div>
                    <div class="slide"> <img alt="Picture of cool sewing project" class="slider-pic" src="{{ asset('pic/pants.jpg') }}"> </div>
                    <div class="slide"> <img alt="Picture of cool sewing project" class="slider-pic" src="{{ asset('pic/black_dress.jpg') }}"> </div>
                    <div class="slide"> <img alt="Picture of cool sewing project" class="slider-pic" src="{{ asset('pic/dress.jpg') }}"> </div>
                    <div class="slide"> <img alt="Picture of cool sewing project" class="slider-pic" src="{{ asset('pic/keybobs.jpg') }}"> </div>
                    <div class="slide"> <img alt="Picture of cool sewing project" class="slider-pic" src="{{ asset('pic/pants.jpg') }}"> </div>
                </div>
            </div>
        </section>
    </header>

    <main>
        <section>
            @if (Session::has('message'))
                <div>{{ Session::get('message')  }}</div>
            @endif
            @if (Session::has('status'))
                <div>{{ Session::get('status')  }}</div>
            @endif
        </section>

        @yield('content')
    </main>

    <footer>
        <section class="container_footer">
            <div class="flex_box"> <img src="" alt="Sewables logo" id="sewables_logo-footer"> </div>

            <div class="flex_box">
                <ul>
                    <li> <a class="link_footer" href="">Log in</a> </li>
                    <li> <a class="link_footer" href="">Projects</a> </li>
                    <li> <a class="link_footer" href="">Face behind the website</a> </li>
                </ul>
            </div>
        </section>
    </footer>
</body>
</html>






