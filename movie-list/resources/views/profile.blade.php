@extends('layouts.guest')

@section('content')
    <div class="flex flex-row my-10 mx-20 text-white space-x-20 w-full">
        <div class="flex flex-col space-y-4 items-center mt-10 w-1/4">
            <h1 class="text-3xl font-bold">My <span class="text-red-600">Profile</span></h1>
            @if (Auth::user()->image)
                <img src="{{ $user->image }}" alt="{{ $user->name }}" class="w-[5rem] rounded-full">
            @else
                <svg xmlns="http://www.w3.org/2000/svg" width="5rem" height="5rem" preserveAspectRatio="xMidYMid meet"
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M12 19.2c-2.5 0-4.71-1.28-6-3.2c.03-2 4-3.1 6-3.1s5.97 1.1 6 3.1a7.232 7.232 0 0 1-6 3.2M12 5a3 3 0 0 1 3 3a3 3 0 0 1-3 3a3 3 0 0 1-3-3a3 3 0 0 1 3-3m0-3A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10c0-5.53-4.5-10-10-10Z" />
                </svg>
            @endif
            <h2 class="font-bold text-center">{{ $user->name }} <br>
                {{ $user->email }}</h2>
        </div>
        <form action="/profile" method="POST" class="flex flex-col space-y-6 w-1/2">
            @csrf
            <h1 class="text-3xl font-bold ml-4 text-red-600 mb-8">Update Profile</h1>
            <div class="flex flex-row bg-gray-900 py-2 px-4 w-full items-center space-x-5 rounded-md">
                <label for="Username" class="font-bold text-xl">Username</label>
                <input type="text" name="name" class="rounded-md border-none bg-gray-900 focus:ring-0"
                    value="{{ $user->name }}">
                @error('name')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-row bg-gray-900 py-2 px-4 w-full items-center space-x-5 rounded-md">
                <label for="Email" class="font-bold text-xl">Email</label>
                <input type="email" name="email" class="rounded-md border-none bg-gray-900 focus:ring-0"
                    value="{{ $user->email }}">
                @error('email')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-row bg-gray-900 py-2 px-4 w-full items-center space-x-5 rounded-md">
                <label for="DOB" class="font-bold text-xl">DOB</label>
                <input type="date" name="dob" class="rounded-md border-none bg-gray-900 focus:ring-0"
                    value="{{ $user->dob }}">
                @error('dob')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-row bg-gray-900 py-2 px-4 w-full items-center space-x-5 rounded-md">
                <label for="Phone" class="font-bold text-xl">Phone</label>
                <input type="tel" name="phone" class="rounded-md border-none bg-gray-900 focus:ring-0"
                    value="{{ $user->phone }}">
                @error('phone')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div data-modal-toggle="defaultModal"
                class="w-full bg-red-500 py-2 text-center rounded-md hover:bg-red-700 transiiton-colors duration-300 ease-in-out cursor-pointer">
                Save
                Changes</div>
            <!-- Main modal -->
            <div id="defaultModal" tabindex="-1" aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                <div class="relative w-full h-full max-w-2xl md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-gray-900 text-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-4 rounded-t">
                            <h3 class="text-xl font-semibold">
                                Change Status
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                data-modal-hide="defaultModal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="flex flex-col space-y-4 mt-8 p-4">
                            <div class="flex flex-col space-y-2">
                                <input type="text" name="image" class="rounded-md border-none bg-gray-600 p-2"
                                    placeholder="Image URL" required>
                                <label for="Image" class="text-gray-400">Please upload your image to other sources first
                                    and Use the URL</label>
                            </div>
                            <div class="flex flex-row justify-end mt-10 space-x-8 p-8">
                                <button data-modal-hide="defaultModal"
                                    class="py-4 px-6 bg-gray-400 rounded-md hover:bg-gray-600 transition-colors duration-300 ease-in-out">Close</button>
                                <button type="submit"
                                    class="py-4 px-6 bg-red-600 rounded-md hover:bg-red-800 transition-colors duration-300 ease-in-out">Save
                                    changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
