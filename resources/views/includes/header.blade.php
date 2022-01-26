<a href="/">
    <h1>Factoría Masterclasses</h1>
</a>

@if (Route::has('login'))
    <div class="hidden px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Inicia sesión</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Regístrate</a>
            @endif
        @endauth
    </div>
@endif