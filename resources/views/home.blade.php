<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
</head>
<body>
    <nav>
        <section id="nav_container">
            <div class="link"> <img src="" alt="Sewables logo" id="sewables_logo_nav"> </div>
            <div class="link"> <a class="link" href="home.blade.php"> Home </a> </div>
            <div class="link"> <a class="link" href="projects.blade.php"> Projects </a> </div>

            <div class="dropdown">
                <button class="dropbtn"> <img src="{{ asset('pic/hamburger-menu.svg') }}" alt="Hamburger menu picture" id="hamburger_icon"></button>
                <div class="dropdown-content">
                    <a href="#">Log in</a>
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
        <h1 class="h1_main"> Who are we? </h1>
        <section  class="container">
            <div class="flexbox"> <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, enim fugiat hic neque pariatur repudiandae voluptatum? Blanditiis debitis dolorem ea esse ipsa iusto nulla pariatur, provident saepe sapiente sequi tempore.</p></div>
            <div class="flexbox"> <img src="{{ asset('pic/pants.jpg') }}" alt="Logo of Sewables"> </div>
        </section>

        <h1 class="h1_main"> Latest Updates </h1>
        <section class="container">
            <div class="flexbox"> <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto blanditiis cumque dolor ea eaque esse expedita explicabo fuga labore laboriosam laudantium magnam odit, officia, quas recusandae, repudiandae sunt? Et, repudiandae!</p></div>
            <div class="flexbox"> <img src="{{ asset('pic/pants.jpg') }}" alt="Picture fitting for the update"> </div>
        </section>
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

