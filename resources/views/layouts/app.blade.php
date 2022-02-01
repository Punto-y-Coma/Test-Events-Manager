<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
    
    <header class="d-flex justify-content-between align-items-center">
        <x-header/>
    </header>

    <div id="main">
        @yield('content')
    </div>  

    <footer>
        <x-footer />
    </footer>

</body>
</html>