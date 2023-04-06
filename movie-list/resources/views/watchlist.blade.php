@extends('layouts.guest')

@section('content')
<div class="flex flex-col m-10 space-y-10 text-white">
    <div class="flex flex-row items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="5rem" height="5rem" preserveAspectRatio="xMidYMid meet" class="text-red-600" viewBox="0 0 24 24">
            <path fill="currentColor" d="M5 21V5q0-.825.588-1.413Q6.175 3 7 3h10q.825 0 1.413.587Q19 4.175 19 5v16l-7-3Z" />
        </svg>
        <h1 class="text-5xl font-medium">My <span class="text-red-600">Watchlist</span></h1>
    </div>
    <form action="{{ route('watchlist-search') }}" method="POST" class="w-full">
        @csrf
        <input type="text" name="search" class="w-full bg-gray-900 border-none rounded-md" placeholder="Search your wishlist">
        @error('name')
        <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </form>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="text-lg">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Poster
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($watchlists as $watchlist)
                <tr class="bg-gray-900">
                    <td scope="row" class="px-6 py-4 w-60">
                        <img src="{{ asset('storage/' . $watchlist->movie->thumbnail) }}" alt="{{ $watchlist->movie->name }}" class="rounded-md">
                    </td>
                    <td class="px-6 py-4 text-lg font-medium">
                        {{ $watchlist->movie->title }}
                    </td>
                    <td class="px-6 py-4 text-lg font-medium">
                        @if ($watchlist->status == 'Planned')
                        <p class="text-green-400">{{ $watchlist->status }}</p>
                        @elseif ($watchlist->status == 'Watching')
                        <p class="text-green-600">{{ $watchlist->status }}</p>
                        @else
                        <p class="text-yellow-600">{{ $watchlist->status }}</p>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-lg font-medium">
                        <button data-modal-target="default" data-modal-toggle="defaultModal-{{ $watchlist->id }}">...</button>
                        <!-- Main modal -->
                        <div id="defaultModal-{{ $watchlist->id }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                            <div class="relative w-full h-full max-w-2xl md:h-auto">
                                <!-- Modal content -->
                                <div class="relative text-white bg-gray-900 rounded-lg shadow">
                                    <!-- Modal header -->
                                    <div class="flex items-start justify-between p-4 rounded-t">
                                        <h3 class="text-xl font-semibold">
                                            Change Status
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="defaultModal-{{ $watchlist->id }}">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form action="/watchlist" method="POST" class="flex flex-col justify-between mt-8">
                                        @csrf
                                        <input type="hidden" name="watchlist_id" value="{{ $watchlist->id }}">
                                        <select name="status" class="bg-gray-600 border-none rounded-md">
                                            <option value="Planned" selected>Planned</option>
                                            <option value="Watching">Watching</option>
                                            <option value="Finished">Finished</option>
                                        </select>
                                        <div class="flex flex-row justify-end mt-10 space-x-8">
                                            <button class="px-6 py-4 transition-colors duration-300 ease-in-out bg-gray-400 rounded-md hover:bg-gray-600">Close</button>
                                            <button class="px-2 py-4 transition-colors duration-300 ease-in-out bg-red-600 rounded-md hover:bg-red-800">Save
                                                changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $watchlists->links() }}
</div>
@endsection