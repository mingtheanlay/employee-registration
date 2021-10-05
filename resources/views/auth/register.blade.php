@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 pt-6">
        <h1 class="text-2xl bold">HR Sign Up</h1>
    </div>
    <div class="container mx-auto px-6">
        <div class="w-full">
            <div class="container mx-auto py-8">
                <div class="mx-auto bg-grey-500 rounded shadow">
                    <form class="py-4 px-8" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="flex mb-4">
                            <div class="w-1/2 mr-1">
                                <label class="block text-grey-500 text-sm font-bold mb-2" for="first_name">First
                                    Name</label>
                                <input
                                    class="appearance-none border rounded w-full py-2 px-3 text-grey-500 
                                    @error('first_name')
                                        border-red-500
                                    @enderror 
                                    " value="{{old('first_name')}}"
                                    id="first_name" name="first_name" type="text" placeholder="Your first name">
                                @error('first_name')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="w-1/2 ml-1">
                                <label class="block text-grey-500 text-sm font-bold mb-2" for="last_name">Last
                                    Name</label>
                                <input
                                    class="appearance-none border rounded w-full py-2 px-3 text-grey-500
                                    @error('last_name')
                                    border-red-500
                                    @enderror 
                                    " value="{{old('last_name')}}"
                                    id="last_name" name="last_name" type="text" placeholder="Your last name">
                                @error('last_name')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block text-grey-500 text-sm font-bold mb-2" for="username">Username</label>
                            <input
                                class="appearance-none border rounded w-full py-2 px-3 text-grey-500 
                                @error('username')
                                    border-red-500
                                @enderror " value="{{old('username')}}"
                                id="username" name="username" type="username" placeholder="Your username">
                            @error('username')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-grey-500 text-sm font-bold mb-2" for="password">Password</label>
                            <input
                                class="appearance-none border rounded w-full py-2 px-3 text-grey-500
                                @error('password')
                                    border-red-500
                                @enderror "
                                id="password" type="password" name="password" placeholder="Your secure password">
                            @error('password')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-grey-500 text-sm font-bold mb-2" for="password_confirmation">Confirm
                                Password</label>
                            <input class="appearance-none border rounded w-full py-2 px-3 text-grey-500"
                                id="password_confirmation" name="password_confirmation" type="password"
                                placeholder="Your password again">
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/2 mr-1">
                                <label class="block text-grey-500 text-sm font-bold mb-2" for="email">Email</label>
                                <input
                                    class="appearance-none border rounded w-full py-2 px-3 text-grey-500 
                                    @error('email')
                                        border-red-500
                                    @enderror
                                    " value="{{old('email')}}"
                                    id="email" type="email" name="email" placeholder="Your email">
                                @error('email')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="w-1/2 ml-1">
                                <label class="block text-grey-500 text-sm font-bold mb-2" for="telephone">Telephone</label>
                                <input
                                    class="appearance-none border rounded w-full py-2 px-3 text-grey-500 
                                    @error('telephone')
                                        border-red-500
                                    @enderror" value="{{old('telephone')}}"
                                    id="telephone" name="telephone" type="text" placeholder="Your telephone">
                                @error('telephone')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-8">
                            <button class="bg-black hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-full"
                                type="submit">
                                Sign Up
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
