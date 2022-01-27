<<<<<<< HEAD
<!doctype html>
<html>
=======
<!DOCTYPE html>
<<<<<<< HEAD:resources/views/layouts/layout.blade.php
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
=======
<html lang="en">
>>>>>>> 708fe15ca62c3a4278e29c6a700ac3fa47530d82
>>>>>>> f204a4a776f3f5a361ba31c9c28971c07d3f78f7:resources/views/layout.blade.php
<head>
    @include('includes.head')
</head>
<body>
<<<<<<< HEAD
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">

            @yield('content')

    </div>

    @include('includes.masterclasses-out-date')

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
=======
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
>>>>>>> 708fe15ca62c3a4278e29c6a700ac3fa47530d82
</body>
</html>