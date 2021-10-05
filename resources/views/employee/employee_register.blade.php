@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 pt-6">
        <h1 class="text-2xl bold">Employee Registration</h1>
    </div>
    <div class="container mx-auto px-6">
        <!-- Content -->
        <div class="w-full">
            <div class="container mx-auto py-8">
                <div class="mx-auto bg-grey-500 rounded shadow">
                    <form class="py-4 px-8" action="{{ route('employee_register') }}" method="POST">
                        <div class="flex mb-4">
                            <div class="w-1/2 mr-1">
                                <label class="block text-grey-darker text-sm font-bold mb-2" for="first_name">First
                                    Name</label>
                                <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                                    id="first_name" type="text" placeholder="Your first name">
                            </div>
                            <div class="w-1/2 ml-1">
                                <label class="block text-grey-darker text-sm font-bold mb-2" for="last_name">Last
                                    Name</label>
                                <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                                    id="last_name" type="text" placeholder="Your last name">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block text-grey-darker text-sm font-bold mb-2" for="username">Username</label>
                            <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="username"
                                type="username" name="username" placeholder="Your username">
                        </div>
                        <div class="mb-4">
                            <label class="block text-grey-darker text-sm font-bold mb-2" for="password">Password</label>
                            <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="password"
                                type="password" placeholder="Your secure password">
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/2 mr-1">
                                <label class="block text-grey-darker text-sm font-bold mb-2" for="email">Email</label>
                                <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email"
                                    type="email" placeholder="Your email">
                            </div>
                            <div class="w-1/2 ml-1">
                                <label class="block text-grey-darker text-sm font-bold mb-2"
                                    for="telephone">Telephone</label>
                                <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                                    id="telephone" type="text" placeholder="Your telephone">
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-8">
                            <button class="bg-black hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-full"
                                type="submit">
                                Add New Employee
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
