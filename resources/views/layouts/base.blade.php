<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
