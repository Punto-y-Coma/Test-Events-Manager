<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-head />
</head>
<body>
    <div id="app">

        <x-header/>

        @include('pages.featuredClasses')

        <main class="py-4">
            @yield('content')
        </main>

        <x-footer/>

    </div>
</body>
</html>
