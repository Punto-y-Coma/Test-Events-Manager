@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mi perfil') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You can see the masterclasses in which you have registered!') }}
                    <div class="card-body">
                        <h4>Hola, {{ auth()->user()->name }} </h4>
                        <p>{{ auth()->user()->is_admin }}</p>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
