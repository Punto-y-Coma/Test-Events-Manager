<<<<<<< HEAD
<!doctype html>
<html>
=======
<!DOCTYPE html>
<html lang="en">
>>>>>>> 708fe15ca62c3a4278e29c6a700ac3fa47530d82
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