<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
        <link rel="stylesheet" href="/assets/css/header.css">

        {{-- If $title is set then format the title like " title | appname " else juste print the app name --}}
        <title>{{ isset($title) ? $title . ' | ' . config('app.name') : config('app.name') }}</title>

        @yield('assets')
    </head>
    <body>
        @if (!Route::is('login'))
            @include('layouts/partials/_header')
        @endif

        <main role="main">
            @yield('content')
        </main>

        @include('layouts/partials/_footer')
    </body>
</html>
