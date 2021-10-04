@extends('layouts.app')

@section('content')
    <section class="container mx-auto px-6 pt-6">
        <h1 class="text-2xl bold">Employee List</h1>
    </section>
    <section class="container mx-auto p-6">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr
                            class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                            <th class="px-4 py-3">#</th>
                            <th class="px-4 py-3">First Name</th>
                            <th class="px-4 py-3">Last Name</th>
                            <th class="px-4 py-3">Username</th>
                            <th class="px-4 py-3">Telephone</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Salary</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr class="text-gray-700">
                            <th class="px-4 py-3">1 </th>
                            <td class="px-4 py-3 text-ms font-semibold border">John</td>
                            <td class="px-4 py-3 text-ms font-semibold border">Doe</td>
                            <td class="px-4 py-3 border">
                                <div class="flex items-center text-sm">
                                    <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                                            alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-black">john_doe</p>
                                        <p class="text-xs text-gray-600">Developer</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm border">+855 12 345 1234</td>
                            <td class="px-4 py-3 text-sm border">test@test.com</td>
                            <td class="px-4 py-3 text-sm border">$ 500</td>
                        </tr>     
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
