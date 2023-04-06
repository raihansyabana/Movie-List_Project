@extends('layouts.guest')

@section('content')
    <div class="p-20 flex flex-col text-white">
        <h1 class="font-bold text-2xl">Edit Movie</h1>
        <form action="/edit/movie" method="POST" class="mt-4 flex flex-col space-y-4" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="movie_id" value="{{ $movie->id }}">
            <div class="flex flex-col space-y-2">
                <label for="Title" class="text-xl">Title</label>
                <input type="text" name="title" class="rounded-md border-none bg-gray-900" value="{{ $movie->title }}">
                @error('title')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col space-y-2">
                <label for="Description" class="text-xl">Description</label>
                <textarea name="description" rows="8" class="rounded-md border-none bg-gray-900">{{ $movie->description }}</textarea>
                @error('description')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col space-y-2">
                <label for="Genre" class="text-xl">Genre</label>
                <select name="genre" class="rounded-md border-none bg-gray-900">
                    <option value="{{ $movie->genreID }}" selected>{{ $movie->genreName }}</option>
                    @foreach ($genres as $genre)
                        @if ($genre->id != $movie->genreID)
                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endif
                    @endforeach
                </select>
                @error('genre')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>
            @foreach ($selectedActors as $actor)
                <div class="flex flex-row space-x-5 w-full" id="add_after_me">
                    <div class="flex flex-col space-y-2 w-full">
                        <label for="Actor" class="text-xl">Actor</label>
                        <select name="actor[]" class="rounded-md border-none bg-gray-900">
                            <option value="{{ $actor->actor->id }}" selected>{{ $actor->actor->name }}</option>
                            @foreach ($actors as $data)
                                @if ($data->id != $actor->actor->id)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('actor')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col space-y-2 w-full">
                        <label for="Character Name" class="text-xl">Character Name</label>
                        <input type="text" name="character[]" class="rounded-md border-none bg-gray-900" value="{{ $actor->character_name }}">
                        @error('character')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            @endforeach
            <div id="team-member-fields"></div>
            <div class="flex flex-row justify-end">
                <a class="cursor-pointer px-4 py-2 bg-blue-500 rounded-md hover:bg-blue-700 transition-colors duration-300 ease-in-out" id="add-member-fields">Add More</a>
            </div>
            <div class="flex flex-col space-y-2 w-full">
                <label for="Director" class="text-xl">Director</label>
                <input type="text" name="director" class="rounded-md border-none bg-gray-900" value="{{ $movie->director }}">
                @error('director')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col space-y-2 w-full">
                <label for="Release Date" class="text-xl">Release Date</label>
                <input type="date" name="release_date" class="rounded-md border-none bg-gray-900" value="{{ $movie->release_date }}">
                @error('release_date')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col space-y-2 w-full">
                <label for="Image URL" class="text-xl">Image URL</label>
                <input type="hidden" name="thumbnail" value="{{ $movie->thumbnail }}">
                <input type="file" name="thumbnail" class="rounded-md border-none bg-gray-900">
                @error('thumbnail')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col space-y-2 w-full">
                <label for="Background URL" class="text-xl">Background URL</label>
                <input type="hidden" name="background" value="{{ $movie->background }}">
                <input type="file" name="background" class="rounded-md border-none bg-gray-900">
                @error('background')
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                class="w-full bg-red-500 py-2 rounded-md hover:bg-red-700 transiiton-colors duration-300 ease-in-out">Edit</button>
        </form>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
          //add input
          $("#add-member-fields").click(function() {
            var rows = '<div class="flex flex-row space-x-5 w-full mb-4" id="add_after_me">' +
                '<div class="flex flex-col space-y-2 w-full">' +
                    '<label for="Actor" class="text-xl">Actor</label>' +
                    '<select name="actor[]" class="rounded-md border-none bg-gray-900">' +
                        '<option selected>---Select actor---</option>' +
                        '@foreach ($actors as $actor)' +
                            '<option value="{{ $actor->id }}">{{ $actor->name }}</option>' +
                        '@endforeach' +
                    '</select>' +
                    '@error("actor")'+
                        '<p class="text-red-600 text-sm">{{ $message }}</p>' +
                    '@enderror' +
                '</div>' +
                '<div class="flex flex-col space-y-2 w-full">' +
                    '<label for="Character Name" class="text-xl">Character Name</label>' +
                    '<input type="text" name="character[]" class="rounded-md border-none bg-gray-900">' +
                    '@error("character")' +
                        '<p class="text-red-600 text-sm">{{ $message }}</p>' +
                    '@enderror' +
                '</div>' +
            '</div>';
            $(rows)
              .fadeIn("slow")
              .appendTo("#team-member-fields");
            return false;
          });
        });
        </script>
@endsection
