@extends('layouts.guest')

@section('content')
    <div class="flex flex-row space-x-20 my-8 mx-20 text-white">
        <div class="flex flex-col space-y-4">
            <div class="relative">
                <img src="{{ asset('storage/' . $actor->image) }}" class="h-[28rem] object-cover rounded-md"
                    alt="{{ $actor->name }}">
                <div class="absolute flex flex-col space-y-6 right-0 top-0 p-4">
                    <a href="{{ route('edit-actor', $actor->id) }}"
                        class="rounded-full bg-red-600 p-2 flex flex-row justify-center hover:bg-red-800 transition-colors duration-300 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M6 22q-.825 0-1.412-.587Q4 20.825 4 20V4q0-.825.588-1.413Q5.175 2 6 2h7.175q.4 0 .763.15q.362.15.637.425l4.85 4.85q.275.275.425.637q.15.363.15.763V12h-2V9h-4q-.425 0-.712-.288Q13 8.425 13 8V4H6v16h6v2Zm0-2V4v16Zm12.3-5.475l1.075 1.075l-3.875 3.85v1.05h1.05l3.875-3.85l1.05 1.05l-4 4q-.15.15-.338.225q-.187.075-.387.075H14.5q-.2 0-.35-.15q-.15-.15-.15-.35v-2.25q0-.2.075-.387q.075-.188.225-.338Zm3.175 3.175L18.3 14.525l1.45-1.45q.275-.275.7-.275q.425 0 .7.275l1.775 1.775q.275.275.275.7q0 .425-.275.7Z" />
                        </svg>
                    </a>
                    <a href="{{ route('delete-actor', $actor->id) }}"
                        class="rounded-full bg-red-600 p-2 flex flex-row justify-center hover:bg-red-800 transition-colors duration-300 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256">
                            <path fill="currentColor"
                                d="M216 48h-36V36a28.1 28.1 0 0 0-28-28h-48a28.1 28.1 0 0 0-28 28v12H40a12 12 0 0 0 0 24h4v136a20.1 20.1 0 0 0 20 20h128a20.1 20.1 0 0 0 20-20V72h4a12 12 0 0 0 0-24ZM100 36a4 4 0 0 1 4-4h48a4 4 0 0 1 4 4v12h-56Zm88 168H68V72h120Zm-72-100v64a12 12 0 0 1-24 0v-64a12 12 0 0 1 24 0Zm48 0v64a12 12 0 0 1-24 0v-64a12 12 0 0 1 24 0Z" />
                        </svg>
                    </a>
                </div>
            </div>
            <h1 class="text-3xl font-light">Personal Info</h1>
            <div class="flex flex-col">
                <h2>Popularity</h2>
                <p class="text-gray-600">{{ $actor->popularity }}</p>
            </div>
            <div class="flex flex-col">
                <h2>Gender</h2>
                <p class="text-gray-600">{{ $actor->gender }}</p>
            </div>
            <div class="flex flex-col">
                <h2>Birthday</h2>
                <p class="text-gray-600">{{ \Carbon\Carbon::parse($actor->dob)->format('d-m-y') }}</p>
            </div>
            <div class="flex flex-col">
                <h2>Place of Birth</h2>
                <p class="text-gray-600">{{ $actor->pob }}</p>
            </div>
        </div>
        <div class="flex flex-col space-y-4 mt-4 w-11/12">
            <h1 class="text-5xl font-bold">{{ $actor->name }}</h1>
            <h2 class="text-3xl">Biography</h2>
            <p class="text-xl">{{ $actor->biography }}</p>
            <h1 class="text-4xl font-medium mt-4">Known For</h1>
            <div class="grid grid-cols-4 gap-5 mt-8">
                @foreach ($actor->movies as $movie)
                    <a href="{{ route('movie-detail', $movie->movie->id) }}">
                        <div class="flex flex-col p-4 bg-[#2d2d2d] rounded-md">
                            <img src="{{ asset('storage/' . $movie->movie->thumbnail) }}"
                                alt="{{ $movie->movie->title }}">
                            <div class="flex flex-col mt-4 space-y-1">
                                <h1 class="font-bold text-xl">{{ $movie->character_name }}</h1>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
