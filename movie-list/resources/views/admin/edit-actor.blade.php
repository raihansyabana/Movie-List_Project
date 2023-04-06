@extends('layouts.guest')

@section('content')
    <form action="/edit/actor" method="POST" class="flex flex-col m-10 text-white space-y-4" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="actor_id" value="{{ $actor->id }}">
        <h1 class="text-3xl font-bold">Edit Actor</h1>
        <div class="flex flex-col space-y-2">
            <label for="Name" class="text-xl">Name</label>
            <input type="text" name="name" class="rounded-md border-none bg-gray-900" value="{{ $actor->name }}">
            @error('name')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col space-y-2">
            <label for="Gender" class="text-xl">Gender</label>
            <select name="gender" class="rounded-md border-none bg-gray-900">
                <option value="{{ $actor->gender }}" selected>{{ $actor->gender }}</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            @error('gender')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col space-y-2">
            <label for="Biography" class="text-xl">Biography</label>
            <textarea rows="10" name="biography" class="rounded-md border-none bg-gray-900">{{ $actor->biography }}</textarea>
            @error('biography')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col space-y-2">
            <label for="Date Of Birth" class="text-xl">Date Of Birth</label>
            <input type="date" name="dob" class="rounded-md border-none bg-gray-900" value="{{ $actor->dob }}">
            @error('dob')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col space-y-2">
            <label for="Place Of Birth" class="text-xl">Place Of Birth</label>
            <input type="text" name="pob" class="rounded-md border-none bg-gray-900" value="{{ $actor->pob }}">
            @error('pob')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col space-y-2">
            <label for="Image URL" class="text-xl">Image URL</label>
            <input type="file" name="image" class="rounded-md border-none bg-gray-900">
            <input type="hidden" name="image" value="{{ $actor->image }}">
            @error('image')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col space-y-2">
            <label for="Popularity" class="text-xl">Popularity</label>
            <input type="number" name="popularity" min="1" class="rounded-md border-none bg-gray-900" value="{{ $actor->popularity }}">
            @error('popularity')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit"
                class="w-1/4 bg-red-500 py-2 rounded-md hover:bg-red-700 transiiton-colors duration-300 ease-in-out">Edit</button>
    </form>
@endsection