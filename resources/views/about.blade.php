<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                margin-bottom: 2rem;
            }

            a{
                text-decoration: none;
                color: black;
                font-weight: 800;
                padding: 0.7rem 1rem;
            }
        </style>
    </head>
    
    <body>

        <nav class="nav justify-content-center bg-success">
          <a  href="{{ url('/') }}">Home</a>
        </nav>

        <div id="heading" class="text-center">
            <h3>film: {{ $title }}</h3>
            <p>{{$genre}}</p>
            <h5>$directer</h5>
            @foreach ($movies as $movie)
                <p>{{ $movie }}</p>
            @endforeach
        </div>

    </body>
</html>
