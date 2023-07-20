<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      
    </head>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        a {
            text-decoration: none;
        }
    </style>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h2>Hello world</h2>
                </div>
                <div class="col-8 d-flex align-items-center justify-content-center">
                    <a href="/about-us">About US</a>
                    <a class="ms-5" href="/more">Cosa stiamo introducendo?</a>
                </div>
            </div>
        </div>
    </body>
</html>
