@extends('layouts.guest')

@section('content')
    <div class="flex flex-col text-white">
        <div class="flex flex-row justify-between mt-6 mx-10">
            <h1 class="text-red-700 font-bold text-3xl">Search</h1>
        </div>
        <div class="grid grid-cols-5 gap-10 m-10">
            @foreach ($movies as $movie)
                <div class="flex flex-col p-4 bg-[#2d2d2d] rounded-md">
                    <img src="{{ asset('storage/' . $movie->thumbnail) }}" alt="{{ $movie->title }}">
                    <div class="flex flex-col mt-4 space-y-1">
                        <h1 class="font-bold text-xl">{{ $movie->title }}</h1>
                        <h2 class="text-gray-500">{{ \Carbon\Carbon::parse($movie->release_date)->format('Y') }}</h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
