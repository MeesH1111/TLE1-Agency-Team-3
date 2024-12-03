<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{ $css }}
    @vite('resources/css/app.css')
    @vite('resources/js/main.js')
    <title>{{ $title ?? 'Default Title' }}</title>
</head>

<body>

<nav class="navbar">
    <div class="logo">
        <a href="/">
            <img src="https://www.openhiring.nl/assets/images/logo/logo-oh.png" alt="Open Hiring Logo">
        </a>
    </div>
    <button class="menu" id="burger-menu" aria-expanded="false" aria-controls="nav-options">
        <div class="menu-bar"></div>
        <div class="menu-bar"></div>
        <div class="menu-bar"></div>
    </button>
    <div class="nav-options" id="nav-options">
        <a href="#">Home</a>
        <a href="#">Over Ons</a>
        <a href="#">Profile</a>
    </div>
</nav>

<main>
    {{$slot}}
</main>


<footer>
    <div>
        <h4>Voor werkzoekenden</h4>
        <ul>
            <li><a href="#">Vind een baan</a></li>
            <li><a href="#">Veelgestelde vragen</a></li>
        </ul>
    </div>
    <div>
        <h4>Voor werkgevers</h4>
        <ul>
            <li><a href="#">Spelregels</a></li>
            <li><a href="#">Veelgestelde vragen</a></li>
        </ul>
    </div>
    <div>
        <h4>Over Open Hiring</h4>
        <ul>
            <li><a href="#">Ontstaan</a></li>
            <li><a href="#">Privacybeleid</a></li>
        </ul>
    </div>
    <div>
        <h4>Volg ons op</h4>
        <div class="social-media">
            <a href="#" class="social-link">Linkedin</a>
            <a href="#" class="social-link">Facebook</a>
        </div>
    </div>
</footer>

</body>
</html>
