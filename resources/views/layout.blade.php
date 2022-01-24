<!DOCTYPE html>
<html lang="en">
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