@extends('layouts.app')

@section('content')
    <section class="container mx-auto px-6 pt-6">
        <h1 class="text-2xl bold">Employee List</h1>
        @if (session('status'))
            <div class="bg-green-500 p-2 rounded-lg mb-6 text-white text-center m-5 ">
                {{ session('status') }}
            </div>
        @endif
    </section>
    <section class="container mx-auto p-6">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr
                            class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                            <th class="px-4 py-3">#</th>
                            <th class="px-4 py-3">Employee Name</th>
                            <th class="px-4 py-3">Work Department</th>
                            <th class="px-4 py-3">Salary</th>
                            <th class="px-4 py-3">Telephone</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($employees as $employee)
                            <tr class="text-gray-700">
                                <th class="px-4 py-3">{{ ++$i }}</th>
                                <td class="px-4 py-3 border">
                                    <div class="flex items-center text-sm">
                                        <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full"
                                                src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                                                alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                            </div>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-black">
                                                {{ $employee->first_name . $employee->last_name }}</p>
                                            <p class="text-xs text-gray-600">{{ $employee->title }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm border">{{ $employee->work_department }}</td>
                                <td class="px-4 py-3 text-sm border">${{ $employee->salary }}</td>
                                <td class="px-4 py-3 text-sm border">{{ $employee->telephone }}</td>
                                <td class="px-4 py-3 text-sm border">{{ $employee->email }}</td>
                                <td class="px-8 py-6 border flex text-center justify-center">
                                    <a class="flex-1" href=""><img src="{{ asset('img/view.png') }}" alt=""></a>
                                    <a class="flex-1" href=""><img src="{{ asset('img/edit.svg') }}" alt=""></a>
                                    <a class="flex-1" href="employee_destroy/{{$employee->id}}"><img src="{{ asset('img/delete.svg') }}" alt=""></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
