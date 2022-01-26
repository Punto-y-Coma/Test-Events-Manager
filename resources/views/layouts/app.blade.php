<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>

    <header class="d-flex">
        @include('includes.header')
    </header>
    <div class="container">

        <div id="main">
            @yield('content')
        </div>

        <footer>
            @include('includes.footer')
        </footer>

    </div>

</body>
</html>