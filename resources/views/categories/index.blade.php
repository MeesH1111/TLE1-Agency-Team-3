<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/categories.css', 'resources/js/app.js')
    <title>Categorieën</title>
<body>
<h1 id="categoryTitle">Categorieën</h1>
<div id="categoryList">
    @foreach($categories as $category)
        <a href=" {{ route('vacancies.index',$category->category_name ) }}" id="{{$category->color}}"
           class="categoryCard">
            <h2>{{$category->category_name}}</h2>
        </a>
    @endforeach
</div>

</body>
</html>
