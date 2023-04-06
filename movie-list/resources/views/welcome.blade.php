@extends('layouts.guest')

@section('content')
    {{-- Carousel --}}

    <div id="default-carousel" class="relative" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-[48rem] overflow-hidden rounded-lg">
            @foreach ($carousel as $data)
                <a href="{{ route('movie-detail', $data->id) }}">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('storage/' . $data->background) }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 opacity-80"
                            alt="{{ $data->title }}">
                        <div class="absolute top-2/3 left-1/4 w-1/2 flex flex-col space-y-2 text-white">
                            <div class="flex flex-row space-x-2">
                                @foreach ($data->genres as $genre)
                                    <h2 class="text-xl"> {{ $genre->genre->name }} </h2>
                                @endforeach
                                <h2 class="text-xl"> | {{ \Carbon\Carbon::parse($data->release_date)->format('Y') }}</h2>
                            </div>
                            <h1 class="text-2xl font-medium">{{ $data->title }}</h1>
                            <p>{{ $data->description }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    {{-- End of Carousel --}}

    {{-- Popular --}}
    <div class="flex flex-col bg-[#121117]">
        <h1 class="text-4xl font-bold ml-8 text-white my-6">Popular</h1>
        <hr />
        <!-- Slider main container -->
        <div class="swiper my-4 w-full">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper grid grid-cols-5 mx-4">
                <!-- Slides -->
                @foreach ($movies as $data)
                    <a href="{{ route('movie-detail', $data->id) }}" class="swiper-slide flex flex-col">
                        <div>
                            <img src="{{ asset('storage/' . $data->thumbnail) }}" class="rounded-lg mb-4"
                                alt="{{ $data->title }}">
                            <h1 class="text-white font-medium">{{ $data->title }}</h1>
                            <p class="text-gray-600">{{ \Carbon\Carbon::parse($data->release_date)->format('Y') }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    {{-- End of Popular --}}

    {{-- Show --}}
    <div class="flex flex-col py-10 bg-[#121117]">
        <div class="flex flex-row justify-between items-center">
            <h1 class="text-4xl font-bold ml-8 text-white my-6" id="show">Show</h1>
            <div class="flex flex-row">
                <form action="/movie-search" method="POST" class="mr-10">
                    @csrf
                    <input type="text" name="search"
                        class="bg-[#2d2d2d] rounded-md border-none focus:ring-0 py-2 px-4 focus:bg-[#2d2d2d] text-white"
                        placeholder="Search movie...">
                </form>
                <a href="{{ route('new-movie') }}"
                    class="bg-red-500 text-white hover:bg-red-700 transition-colors duration-300 ease-in-out p-2 rounded-md">Add
                    Movie</a>
            </div>
        </div>
        <hr />
        <div class="grid grid-cols-6 gap-10 my-10 mx-6">
            @foreach ($genres as $data)
                <a href="{{ route('movie-genre', $data->id) }}"
                    class="bg-[#2d2d2d] text-center py-2 px-10 text-white rounded-full">{{ $data->name }}</a>
            @endforeach
        </div>
        <div class="flex flex-row mx-2 items-center">
            <p class="text-white mr-8">Sort By:</p>
            <div class="grid grid-cols-3 gap-10">
                <a href="/" class="bg-[#2d2d2d] text-center py-2 px-10 text-white rounded-full">Latest</a>
                <a href="#" class="bg-[#2d2d2d] text-center py-2 px-10 text-white rounded-full">A-Z</a>
                <a href="#" class="bg-[#2d2d2d] text-center py-2 px-10 text-white rounded-full">Z-A</a>
            </div>
        </div>
        <div class="grid grid-cols-5 gap-10 m-10">
            @foreach ($show as $data)
                <div class="flex flex-col">
                    <a href="{{ route('movie-detail', $data->id) }}">
                        <img src="{{ asset('storage/' . $data->thumbnail) }}" class="rounded-lg mb-4"
                            alt="{{ $data->title }}">
                        <h1 class="text-white font-medium">{{ $data->title }}</h1>
                    </a>
                    <p class="text-gray-600">{{ \Carbon\Carbon::parse($data->release_date)->format('Y') }}</p>
                </div>
            @endforeach
        </div>
    </div>
    {{-- End of Show --}}

    {{-- Swiper JS init --}}
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            slidesPerView: 5,
            spaceBetween: 50,
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        const swiper = new Swiper('.swiper-2', {
            // Optional parameters
            slidesPerView: 6,
            spaceBetween: 50,
            direction: 'horizontal',
            loop: true,

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next-2',
                prevEl: '.swiper-button-prev-2',
            },
        });
    </script>
@endsection
