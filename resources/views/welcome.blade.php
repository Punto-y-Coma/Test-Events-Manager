<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body class="antialiased">
        <div class="container relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <header>
                @include('includes.header')
            </header>

            <main id="main">
                Main
            </main>

            <footer>
                Footer
            </footer>
        </div>
    </body>
</html>
