@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-6 pt-6">
        @auth
            @if (auth()->user())
                <h1 class="text-2xl bold">Hello {{ auth()->user()->first_name . ' ' . auth()->user()->last_name }} !</h1>
            @else
            @endif
        @endauth

        @guest
            <h1 class="text-2xl bold">Welcome to GoodHill Website!</h1>
        @endguest
    </div>
@endsection
