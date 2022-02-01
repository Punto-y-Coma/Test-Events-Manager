<a href="{{ url('/home') }}" class="brand">
    <h1>Factoría Masterclasses</h1>
</a>

{{-- {{ $isAdmin = auth()->user()->is_admin; }} --}}
{{-- @php
    $isAdmin = auth()->user()->is_admin;
@endphp --}}

@if (Route::has('login'))
    <div class="hidden sm:block navigation">
        @auth
            @if (auth()->user()->is_admin === 1)
                <a href="{{ route('admin') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Admin</a>
            @else
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @endif
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Inicia sesión</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Regístrate</a>
            @endif
        @endauth
    </div>
@endif




{{-- ORIGINAL 

@if (Route::has('login'))
    <div class="hidden sm:block navigation">
        @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Inicia sesión</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Regístrate</a>
            @endif
        @endauth
    </div>
@endif --}}

{{-- @if (Route::has('login'))
    <div class="hidden sm:block navigation">
        @auth
            @if (User::where('is_admin' != 0))
                <a href="{{ url('/admin') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Admin</a>                    
            @else
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Mi perfil</a>  
            @endif
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Inicia sesión</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Regístrate</a>
            @endif
        @endauth
    </div>
@endif --}}


{{-- @if (Route::has('login'))
    <div class="hidden sm:block navigation">
        @auth
            @if (auth()->check())
                @if ($user->isAdmin())
                    <a href="{{ url('/admin') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Admin</a>                    
                @else
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Mi perfil</a>  
                @endif
            @endif
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Inicia sesión</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Regístrate</a>
            @endif
        @endauth
    </div>
@endif --}}

{{-- Masterclass::where('date', '<', date("Y-m-d"))->paginate(3); --}}


{{-- $banners = \App\Banner::where('showBanner', '1')->get(['showBanner']);

foreach($banners as $banner){
    $result = $banner->showBanner;
    if($result == 1){
        return "It's TRUE";
    }
    else{
        return "It's FALSE";
    }
} --}}
