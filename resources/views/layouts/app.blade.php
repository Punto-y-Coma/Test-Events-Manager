<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-head /> 
</head>
<body>
    
    <x-header />

    <div id="main" class="my-5">
        @yield('content')
    </div>

    <footer>
        <x-footer />
    </footer>

</body>
</html>