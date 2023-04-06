@extends('layouts.guest')

@section('content')
    <div class="flex flex-row justify-between mx-auto my-10 w-3/5">
        <div class="flex flex-col w-full items-center">
            <h1 class="font-medium text-3xl text-white">Hello, Welcome to Movie<span class="text-red-600">List</span></h1>
            <form action="/register" method="POST" class="space-y-4 w-full mt-6 rounded-md">
                @csrf
                <div class="flex flex-row bg-gray-900 p-4 rounded-lg items-center space-x-4">
                    <label for="Username" class="text-white">Username</label>
                    <input type="text" name="name"
                        class="text-white focus:ring-0 border-none w-full rounded-lg block bg-gray-900 text-center focus:bg-gray-900"
                        placeholder="Enter your username">
                </div>
                @error('name')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
                <div class="flex flex-row bg-gray-900 p-4 rounded-lg items-center space-x-4">
                    <label for="Email" class="text-white">Email</label>
                    <input type="email" name="email"
                        class="text-white focus:ring-0 border-none w-full rounded-lg block bg-gray-900 text-center focus:bg-gray-900"
                        placeholder="Enter your email">
                </div>
                @error('email')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
                <div class="flex flex-row bg-gray-900 p-4 rounded-lg items-center space-x-4">
                    <label for="Password" class="text-white">Password</label>
                    <input type="password" name="password"
                        class="text-white focus:ring-0 border-none w-full rounded-lg block bg-gray-900 text-center focus:bg-gray-900"
                        placeholder="Enter your password">
                </div>
                @error('password')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
                <div class="flex flex-row bg-gray-900 p-4 rounded-lg items-center space-x-4">
                    <label for="Confirm Password" class="text-white">Confirm Password</label>
                    <input type="password" name="password_confirmation"
                        class="text-white focus:ring-0 border-none w-4/5 rounded-lg block bg-gray-900 text-center focus:bg-gray-900"
                        placeholder="Enter your password">
                </div>
                @error('password_confirmation')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
                <button type="submit"
                    class="text-white block w-full bg-red-600 hover:bg-red-700 rounded-lg transition-colors duration-300 ease-in-out py-2">Register
                    <span class="font-medium">-></span></button>
            </form>
            <p class="text-white mt-4">Already an account? <a href="{{ route('login') }}"
                    class="text-red-600">Login now!</a></p>
        </div>
    </div>
@endsection
