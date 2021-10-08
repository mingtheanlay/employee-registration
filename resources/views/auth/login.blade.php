@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    GoodHill
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Log in to your account
                </p>
            </div>
            <form class="mt-8 space-y-5" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="rounded-md -space-y-px">
                    @if (session('status'))
                        <div class="bg-red-500 p-2 rounded-lg mb-6 text-white text-center">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <label for="username" class="sr-only">Username</label>
                        <input id="username" name="username" type="username"
                            class="appearance-none border rounded w-full py-2 px-3 text-grey-500 mb-1
                            @error('username')
                                border-red-500
                            @enderror"
                            value="{{ old('username') }}" placeholder="Username">
                        @error('username')
                            <div class="text-red-500 mt-2 text-sm mb-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password"
                            class="appearance-none border rounded w-full py-2 px-3 text-grey-500 mb-1 mt-3
                            @error('password')
                                border-red-500
                            @enderror"
                            placeholder="Password">
                        @error('password')
                            <div class="text-red-500 mt-2 text-sm mb-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox" checked
                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-900">
                            Remember me
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent rounded-md bg-black hover:bg-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Log in
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection()
