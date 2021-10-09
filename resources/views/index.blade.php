@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-6 pt-6">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative bg-white overflow-hidden">
            <div class="max-w-7xl mx-auto">
                <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                    <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                        <div class="sm:text-center lg:text-left">
                            @auth
                                @if (auth()->user())
                                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                                        <span class="block xl:inline">Welcome</span>
                                        <span
                                            class="block text-green-600 xl:inline">{{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}</span>
                                    </h1>
                                    <p
                                        class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                        We are a leading sales and distribution company in Cambodia, holding the exclusive
                                        distributorships of many international brands from business partners
                                @endif
                            @endauth
                            @guest
                                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                                    <span class="block xl:inline">GoodHill</span>
                                    <span class="block text-green-600 xl:inline">Employee Registration</span>
                                </h1>
                                <p
                                    class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                    We are a leading sales and distribution company in Cambodia, holding the exclusive
                                    distributorships of many international brands from business partners
                                </p>
                            @endguest
                        </div>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            @guest
                                <div class="rounded-md shadow">
                                    <a href="{{ route('login') }}"
                                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700 md:py-4 md:text-lg md:px-10">
                                        Log In
                                    </a>
                                </div>
                                <div class="mt-3 sm:mt-0 sm:ml-3">
                                    <a href="{{ route('register') }}"
                                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-green-700 bg-green-100 hover:bg-green-200 md:py-4 md:text-lg md:px-10">
                                        Register
                                    </a>
                                </div>
                            </div>
                        @endguest
                    </main>
                </div>
            </div>
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                    src="https://images.unsplash.com/photo-1526152505827-d2f3b5b4a52a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                    alt="">
            </div>
        </div>
    </div>
@endsection
