<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
@foreach ($movies as $movie)
    

    <div class="card d-inline-flex p-2 m-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$movie->title}}</h5>
          <p class="card-text">Nazionality: {{$movie->nationality}}</p>
          <a href="#" class="btn btn-primary">Link al film</a>
        </div>
      </div>
      @endforeach
</body>

</html>