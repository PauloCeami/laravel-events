<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.css" />
        <script src="/js/script.js" />
    </head>
    <body>
        @yield('content')

        <footer>
            <p>Laravel-Events &copy; 2021</p>
        </footer>
    </body>
</html>
