<x-
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/vacancy.css', 'resources/js/app.js')
    <title>Vacatures</title>
</head>
<body>
<h1 id="vacancyTitle">Vacatures</h1>
<p class="{{$category}}">{{$category}}</p>
<a href="{{ route('categories.index') }}">Banaan</a>
</body>
</html>
