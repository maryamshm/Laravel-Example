<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Signed URL</title>
        <meta name="author" content="Maryam Shahmohammadi">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
    </head>

    <body>
           <div class="holder">
                <img src="{{ asset("images/unsubscribe.png") }}" alt="unsubscribe"/>
                <h1>Unsubscribe</h1>
                <p>We are sorry to see you go!</p>
                <a href="{{ $url }}"> Confirm </a>
           </div>   
    </body>

</html>
