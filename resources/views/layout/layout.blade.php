@extends('layout')

@section('nav')
    <nav>
        <section id="nav_container">
            <div class="link"> <img src="" alt="Sewables logo" id="sewables_logo_nav"> </div>
            <div class="link"> <a class="link" href="./resources/views/homepage.blade.php"> Home </a> </div>
            <div class="link"> <a class="link" href="./resources/views/projects.blade.php"> Projects </a> </div>

            <div class="dropdown">
                <button class="dropbtn"> <img src="{{ asset('pic/hamburger-menu.svg') }}" alt="Hamburger menu picture" id="hamburger_icon"></button>
                <div class="dropdown-content">
                    <a href="#">Log in</a>
                </div>
            </div>
        </section>
    </nav>
@endsection

@section('header')
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
@endsection

@section('footer')
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
@endsection
