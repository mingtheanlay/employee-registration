@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 pt-6">
        <h1 class="text-2xl bold">Add New Employee</h1>
    </div>
    <div class="container mx-auto px-6">
        <div class="w-full">
            <div class="container mx-auto py-8">
                <div class="mx-auto bg-grey-500 rounded shadow">
                    <form class="py-4 px-8" action="{{ route('employee_register') }}" method="POST">
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
                                    "
                                    value="{{ old('first_name') }}" id="first_name" name="first_name" type="text"
                                    placeholder="Employee's first name">
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
                                    "
                                    value="{{ old('last_name') }}" id="last_name" name="last_name" type="text"
                                    placeholder="Employee's last name">
                                @error('last_name')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/2 mr-1">
                                <label class="block text-grey-500 text-sm font-bold mb-2" for="title">Job title</label>
                                <input
                                    class="appearance-none border rounded w-full py-2 px-3 text-grey-500 
                                    @error('title')
                                        border-red-500
                                    @enderror 
                                    "
                                    value="{{ old('title') }}" id="title" name="title" type="text"
                                    placeholder="Employee's first name">
                                @error('title')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="w-1/2 ml-1">
                                <label class="block text-grey-500 text-sm font-bold mb-2" for="work_department">Work
                                    Departments</label>
                                <input
                                    class="appearance-none border rounded w-full py-2 px-3 text-grey-500
                                    @error('work_department')
                                    border-red-500
                                    @enderror 
                                    "
                                    value="{{ old('work_department') }}" id="work_department" name="work_department"
                                    type="text" placeholder="Employee's work department">
                                @error('work_department')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/2 mr-1">
                                <label class="block text-grey-500 text-sm font-bold mb-2" for="gender">Gender</label>
                                <select
                                    class="appearance-none border rounded w-full py-2 px-3 text-grey-500 
                                    @error('gender')
                                        border-red-500
                                    @enderror 
                                    "
                                    value="{{ old('gender') }}" id="gender" name="gender" >
                                    <option value="" disabled selected>Employee's gender</option>
                                    <option value="female">F</option>
                                    <option value="male">M</option>
                                </select>
                                @error('gender')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="w-1/2 ml-1">
                                <label class="block text-grey-500 text-sm font-bold mb-2"
                                    for="work_department">Salary</label>
                                <input
                                    class="appearance-none border rounded w-full py-2 px-3 text-grey-500
                                    @error('salary')
                                    border-red-500
                                    @enderror 
                                    "
                                    value="{{ old('salary') }}" id="salary" name="salary" type="text"
                                    placeholder="Employee's salary">
                                @error('salary')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="block text-grey-500 text-sm font-bold mb-2" for="date_of_birth">Date of
                                Birth</label>
                            <input
                                class="appearance-none border rounded w-full py-2 px-3 text-grey-500 
                                @error('date_of_birth')
                                    border-red-500
                                @enderror "
                                value="{{ old('date_of_birth') }}" id="date_of_birth" name="date_of_birth" type="date"
                                placeholder="Employee's date of birth">
                            @error('date_of_birth')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/2 mr-1">
                                <label class="block text-grey-500 text-sm font-bold mb-2" for="email">Email</label>
                                <input
                                    class="appearance-none border rounded w-full py-2 px-3 text-grey-500 
                                    @error('email')
                                        border-red-500
                                    @enderror
                                    "
                                    value="{{ old('email') }}" id="email" type="email" name="email"
                                    placeholder="Employee's email">
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
                                    @enderror"
                                    value="{{ old('telephone') }}" id="telephone" name="telephone" type="text"
                                    placeholder="Employee's telephone">
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
                                Register Employee
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
