<!doctype html>
<html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>


    {{--<header class="d-flex">
        @include('includes.header')
    </header>
    <div class="container">

        <div id="main">
            @yield('content')
        </div>

        <footer>
            @include('includes.footer')
        </footer>

    </div> --}}

    <x-card class="card">
        <x-slot name="image" class="card-img-top">
            Image
        </x-slot>
        <x-slot name="title" class="card-title">
            Title
        </x-slot>
        <x-slot name="subtitle" class="card-subtitle mb-2 text-muted">
            SubTitle
        </x-slot>
        <x-slot name="text" class="card-text">
           Text
        </x-slot>
        <x-slot name="button" class="btn btn-secondary">
            Button
        </x-slot>
    </x-card>



</body>
</html>