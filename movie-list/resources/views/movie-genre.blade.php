@extends('layouts.guest')

@section('content')
<div class="flex flex-col text-white">
    <div class="flex flex-row justify-between mx-10 mt-6">
        <h1 class="text-3xl font-bold text-red-700">{{ $genre->name }}</h1>
    </div>
    <div class="grid grid-cols-5 gap-10 m-10">
        @foreach ($movies as $movie)
        <a href="{{ route('movie-detail', $movie->id ) }}">
            <div class="flex flex-col p-4 bg-[#2d2d2d] rounded-md">
                <img src="{{ asset('storage/' . $movie->thumbnail) }}" alt="{{ $movie->title }}">
                <div class="flex flex-col mt-4 space-y-1">
                    <h1 class="text-xl font-bold">{{ $movie->title }}</h1>
                    <h2 class="text-gray-500">{{ \Carbon\Carbon::parse($movie->release_date)->format('Y') }}</h2>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection