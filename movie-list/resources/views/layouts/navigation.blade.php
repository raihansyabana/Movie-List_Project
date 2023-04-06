<nav class="bg-[#1f1f1f] border-gray-700 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="/" class="flex items-center">
            <h1 class="text-5xl font-bold text-white">Movie<span class="text-5xl font-bold text-red-600">List</span>
            </h1>
        </a>
        <div class="block w-auto">
            <ul class="flex flex-col p-4 mt-4 border bg-[#1f1f1f] border-gray-700 md:flex-row md:space-x-4 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-[#1f1f1f] dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/" class="block py-2 pl-3 pr-4 text-white hover:text-gray-100">Home</a>
                </li>
                <li>
                    <a href="/#show" class="block py-2 pl-3 pr-4 text-white hover:text-gray-100">Movie</a>
                </li>
                <li>
                    <a href="{{ route('actors') }}" class="block py-2 pl-3 pr-4 text-white hover:text-gray-100">Actors</a>
                </li>
                @auth
                <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300" type="button">
                    <span class="sr-only">Open user menu</span>
                    @if (Auth::user()->image)
                    <img src="{{ Auth::user()->image }}" alt="{{ Auth::user()->image }}" class="w-[2.5rem] rounded-full">
                    @else
                    <svg xmlns="http://www.w3.org/2000/svg" width="2.5rem" height="2.5rem" class="text-white" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 19.2c-2.5 0-4.71-1.28-6-3.2c.03-2 4-3.1 6-3.1s5.97 1.1 6 3.1a7.232 7.232 0 0 1-6 3.2M12 5a3 3 0 0 1 3 3a3 3 0 0 1-3 3a3 3 0 0 1-3-3a3 3 0 0 1 3-3m0-3A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10c0-5.53-4.5-10-10-10Z" />
                    </svg>
                    @endif
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownAvatar" class="z-50 hidden bg-white divide-y divide-gray-100 rounded shadow w-44">
                    <div class="py-1 border-b">
                        <a href="{{ route('watchlist') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 text-start">Watchlist</a>
                    </div>
                    <div class="py-1 border-b">
                        <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 text-start">Profile</a>
                    </div>
                    <div class="py-1">
                        <form action="{{ route('logout') }}" method="POST" class="w-full">
                            @csrf
                            <button class="block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 text-start">
                                Sign out
                            </button>
                        </form>
                    </div>
                </div>
                @else
                <li>
                    <a href="{{ route('register') }}">
                        <button class="py-2 pl-3 pr-4 font-medium text-white transition-colors duration-150 ease-in-out border border-blue-600 rounded-md hover:bg-blue-600">Register</button>
                    </a>
                </li>
                <li>
                    <a href="{{ route('login') }}">
                        <button class="py-2 pl-3 pr-4 font-medium text-white transition-colors duration-150 ease-in-out border border-blue-600 rounded-md hover:bg-blue-600">Login</button>
                    </a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>