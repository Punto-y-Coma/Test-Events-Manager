<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
    <div class="container">
        <header>
            @include('includes.header')
        </header>

        <main id="main">
            @yield('content')
        </main>

        <footer>
            @include('includes.footer')
        </footer>
    </div>
</body>
</html>