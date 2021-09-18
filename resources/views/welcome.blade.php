<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>@yield('title', '')</title>
        <meta name="description" content="@yield('description', '')">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,400;1,700;1,800&family=Roboto:wght@400;700;900&family=Montserrat:wght@900&display=swap" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('layouts.header')
        @yield('content')
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
