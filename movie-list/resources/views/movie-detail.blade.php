@extends('layouts.guest')

@section('content')
    <div class="relative overflow-hidden w-full object-cover text-white">
        <img src="{{ asset('storage/' . $movie->background) }}" class="object-cover w-full h-[48rem] opacity-50"
            alt="{{ $movie->title }}">
        <div class="w-full h-full absolute flex flex-col top-[2rem] left-[5rem] rounded-lg p-4">
            <div class="flex flex-row space-x-10">
                <div class="relative">
                    <img src="{{ asset('storage/' . $movie->thumbnail) }}" class="w-80 h-[32rem] object-cover rounded-md"
                        alt="{{ $movie->title }}">
                    <div class="absolute flex flex-col space-y-6 right-0 top-0 p-4">
                        <a href="{{ route('edit-movie', $movie->id) }}"
                            class="rounded-full bg-red-600 p-2 flex flex-row justify-center hover:bg-red-800 transition-colors duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M6 22q-.825 0-1.412-.587Q4 20.825 4 20V4q0-.825.588-1.413Q5.175 2 6 2h7.175q.4 0 .763.15q.362.15.637.425l4.85 4.85q.275.275.425.637q.15.363.15.763V12h-2V9h-4q-.425 0-.712-.288Q13 8.425 13 8V4H6v16h6v2Zm0-2V4v16Zm12.3-5.475l1.075 1.075l-3.875 3.85v1.05h1.05l3.875-3.85l1.05 1.05l-4 4q-.15.15-.338.225q-.187.075-.387.075H14.5q-.2 0-.35-.15q-.15-.15-.15-.35v-2.25q0-.2.075-.387q.075-.188.225-.338Zm3.175 3.175L18.3 14.525l1.45-1.45q.275-.275.7-.275q.425 0 .7.275l1.775 1.775q.275.275.275.7q0 .425-.275.7Z" />
                            </svg>
                        </a>
                        <a href="{{ route('delete-movie', $movie->id) }}"
                            class="rounded-full bg-red-600 p-2 flex flex-row justify-center hover:bg-red-800 transition-colors duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256">
                                <path fill="currentColor"
                                    d="M216 48h-36V36a28.1 28.1 0 0 0-28-28h-48a28.1 28.1 0 0 0-28 28v12H40a12 12 0 0 0 0 24h4v136a20.1 20.1 0 0 0 20 20h128a20.1 20.1 0 0 0 20-20V72h4a12 12 0 0 0 0-24ZM100 36a4 4 0 0 1 4-4h48a4 4 0 0 1 4 4v12h-56Zm88 168H68V72h120Zm-72-100v64a12 12 0 0 1-24 0v-64a12 12 0 0 1 24 0Zm48 0v64a12 12 0 0 1-24 0v-64a12 12 0 0 1 24 0Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col space-y-6">
                    <h1 class="text-5xl font-medium">{{ $movie->title }}</h1>
                    <div class="flex flex-row space-x-5">
                        @foreach ($movie->genres as $genre)
                            <a href="{{ route('movie-genre', $genre->genre_id) }}">
                                <div class="border-white border py-2 px-8 rounded-full">
                                    {{ $genre->genre->name }}
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="flex flex-row justify-start">
                        <div class="flex flex-col space-y-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em"
                                preserveAspectRatio="xMidYMid meet" class="text-blue-600" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M8 14q-.425 0-.713-.288Q7 13.425 7 13t.287-.713Q7.575 12 8 12t.713.287Q9 12.575 9 13t-.287.712Q8.425 14 8 14Zm4 0q-.425 0-.712-.288Q11 13.425 11 13t.288-.713Q11.575 12 12 12t.713.287Q13 12.575 13 13t-.287.712Q12.425 14 12 14Zm4 0q-.425 0-.712-.288Q15 13.425 15 13t.288-.713Q15.575 12 16 12t.712.287Q17 12.575 17 13t-.288.712Q16.425 14 16 14ZM5 22q-.825 0-1.413-.587Q3 20.825 3 20V6q0-.825.587-1.412Q4.175 4 5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588Q21 5.175 21 6v14q0 .825-.587 1.413Q19.825 22 19 22Zm0-2h14V10H5v10Z" />
                            </svg>
                            <h2>Release Year</h2>
                            <h2 class="text-2xl font-medium">{{ \Carbon\Carbon::parse($movie->release_date)->format('Y') }}
                            </h2>
                        </div>
                    </div>
                    <div class="flex flex-col space-y-2 w-4/5">
                        <h1 class="text-3xl font-bold">Storyline</h1>
                        <p>{{ $movie->description }}</p>
                    </div>
                    <div class="flex flex-col space-y-2 w-4/5">
                        <h1 class="text-3xl font-bold">{{ $movie->director }}</h1>
                        <p>Director</p>
                    </div>
                </div>
            </div>
            @auth
                @if (Auth::user()->role == 'User' && !$watchlist)
                    <a href="{{ route('add-watchlist', $movie->id) }}"
                        class="w-1/2 text-center mt-8 bg-red-500 py-2 rounded-md hover:bg-red-700 transiiton-colors duration-300 ease-in-out">Add
                        to Watchlist</a>
                @endif
            @endauth
        </div>
    </div>

    {{-- Cast --}}
    <div class="bg-[#121117] flex flex-col text-white p-20">
        <h1 class="text-3xl font-bold">Cast</h1>
        <div class="grid grid-cols-5 gap-10 mt-8">
            @foreach ($movie->actors as $actor)
                <div>
                    <div class="bg-[#910915] rounded-md flex flex-col">
                        <img src="{{ asset('storage/' . $actor->actor->image) }}"
                            class="object-cover rounded-tl-md rounded-tr-md" alt="{{ $actor->actor->name }}">
                        <div class="flex flex-col space-y-4 p-4">
                            <h1 class="text-xl">{{ $actor->actor->name }}</h1>
                            <h2>{{ $actor->character_name }}</h2>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- More --}}
    <div class="bg-[#121117] flex flex-col text-white p-20">
        <h1 class="text-3xl font-bold">More</h1>
        <div class="grid grid-cols-5 gap-10 mt-8">
            @foreach ($more as $data)
                <div class="flex flex-col">
                    <a href="{{ route('movie-detail', $data->id) }}" class="w-full">
                        <img src="{{ asset('storage/' . $data->thumbnail) }}" class="rounded-lg mb-4"
                            alt="{{ $data->title }}">
                        <h1 class="text-white font-medium">{{ $data->title }}</h1>
                    </a>
                    <div class="flex flex-row justify-between items-center">
                        <p class="text-gray-600">{{ \Carbon\Carbon::parse($movie->release_date)->format('Y') }}</p>
                        @auth
                            @if (Auth::user()->role == 'User')
                                @if ($watchlist == null)
                                    <a href="{{ route('add-watchlist', $data->id) }}"
                                        class="text-gray-600 text-lg font-medium">+</a>
                                @else
                                    @if ($watchlist->movie_id == $data->id)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em"
                                            class="text-red-600" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="m9.55 18l-5.7-5.7l1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4Z" />
                                        </svg>
                                    @else
                                        <a href="{{ route('add-watchlist', $data->id) }}"
                                            class="text-gray-600 text-lg font-medium">+</a>
                                    @endif
                                @endif
                            @endif
                        @endauth
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
