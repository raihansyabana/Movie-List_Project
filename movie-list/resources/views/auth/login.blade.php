@extends('layouts.guest')

@section('content')
    <div class="flex flex-row justify-between mx-auto my-10 w-2/5">
        <div class="flex flex-col w-full items-center">
            <h1 class="font-medium text-3xl text-white">Hello, Welcome back to Movie<span class="text-red-600">List</span></h1>
            <form action="/login" method="POST" class="space-y-4 w-full mt-6 rounded-md">
                @csrf
                <div class="flex flex-row bg-gray-900 p-4 rounded-lg items-center space-x-4">
                    <label for="Email" class="text-white">Email</label>
                    <input type="email" name="email" class="text-white focus:ring-0 border-none w-full rounded-lg block bg-gray-900 text-center focus:bg-gray-900" placeholder="Enter your email">
                </div>
                @error('email')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
                <div class="flex flex-row bg-gray-900 p-4 rounded-lg items-center space-x-4">
                    <label for="Password" class="text-white">Password</label>
                    <input type="password" name="password" class="text-white focus:ring-0 border-none w-full rounded-lg block bg-gray-900 text-center focus:bg-gray-900" placeholder="Enter your password">
                </div>
                @error('password')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
                <div class="flex flex-row rounded-lg items-center space-x-4">
                    <input type="checkbox" value="1" name="remember" class="focus:ring-0 rounded-md border-none block bg-gray-900 text-center focus:bg-gray-900" placeholder="Enter your password">
                    <label for="Remember Me" class="text-white">Remember Me</label>
                </div>
                <button type="submit" class="block w-full bg-red-600 hover:bg-red-700 rounded-lg text-white transition-colors duration-300 ease-in-out py-2">Login <span class="font-medium">-></span></button>
            </form>
            <p class="text-white mt-4">Don't have an account? <a href="{{ route('register') }}" class="text-red-600">Register now!</a></p>
        </div>
    </div>
@endsection
