<nav id="navbar" x-data="{ open: false }"
    class="fixed top-0 z-50 w-full p-6 transition-all duration-300 bg-gradient-to-r from-slate-900 to-slate-950">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto max-w-7xl">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}">
                    <span class="sr-only">Home</span>
                    <img src="{{ asset('img/LogoLisa.png') }}" alt="Logo" class="w-auto h-16" />
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-10 sm:flex">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="text-xl text-white">
                    {{ __('Home') }}
                </x-nav-link>
                {{-- <x-nav-link :href="route('rooms')" :active="request()->routeIs('rooms')" class="text-xl text-white">
                    {{ __('Rooms') }}
                </x-nav-link> --}}

                <x-dropdown align="left" width="48">
                    <x-slot name="trigger">
                        <button
                            class="text-xl inline-block {{ request()->is('rooms*')
                                ? 'inline-flex items-center px-1 pt-1 border-b-2 border-white dark:border-white text-sm font-medium leading-5 text-gray-900 dark:text-gray-100 focus:outline-none focus:border-white transition duration-150 ease-in-out'
                                : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out' }}">
                            <div class="flex items-center justify-between">
                                <span class="text-xl">Rooms</span>
                                <svg class="w-4 h-4 fill-current ms-1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 1.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        @foreach ($rooms as $room)
                            <x-dropdown-link :href="route('rooms.show', $room->id)" :active="request()->routeIs('rooms')"
                                class="block px-4 py-2 text-gray-400 hover:text-gray-300">
                                {{ $room->type }}
                            </x-dropdown-link>
                        @endforeach
                    </x-slot>
                </x-dropdown>



                <x-nav-link :href="route('rental')" :active="request()->routeIs('rental')" class="text-xl text-white">
                    {{ __('Rental') }}
                </x-nav-link>
                <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" class="text-xl text-white">
                    {{ __('Contact') }}
                </x-nav-link>
            </div>

            <!-- Settings Dropdown / Login Button -->
            <div class="hidden sm:flex sm:items-center">
                @auth
                    <!-- Dropdown jika sudah login -->
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-block px-4 py-2 text-center text-white border border-white rounded-md text-md hover:bg-gray-300 hover:text-black focus:bg-white focus:text-black">
                                <div class="flex items-center">
                                    <span>{{ Auth::user()->name }}</span>
                                    <svg class="w-4 h-4 fill-current ms-1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 1.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')" class="text-sm">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" class="text-sm"
                                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @endauth

                @guest
                    <!-- Button Login jika belum login -->
                    <a href="{{ route('login') }}"
                        class="inline-block px-4 py-2 text-center text-white border border-white rounded-md text-md hover:bg-white hover:text-black focus:bg-white focus:text-black">
                        {{ __('Login') }}
                    </a>
                @endguest
            </div>

            <!-- Hamburger -->
            <div class="flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="mt-5 sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            {{-- <x-responsive-nav-link :href="route('rooms')" :active="request()->routeIs('rooms')">
                {{ __('Rooms') }}
            </x-responsive-nav-link> --}}

            <x-dropdown align="left" width="48">
                <x-slot name="trigger">
                    <button
                        class="px-4 py-2 text-gray-400 hover:text-gray-300 {{ request()->is('rooms*') ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-indigo-400 dark:border-indigo-600 text-start text-base font-medium text-indigo-700 dark:text-indigo-300 bg-indigo-50 dark:bg-indigo-900/50 focus:outline-none focus:text-indigo-800 dark:focus:text-indigo-200 focus:bg-indigo-100 dark:focus:bg-indigo-900 focus:border-indigo-700 dark:focus:border-indigo-300 transition duration-150 ease-in-out' : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out' }}">
                        <div class="flex items-center">
                            <span>Rooms</span>
                            <svg class="w-4 h-4 fill-current ms-1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 1.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>
                <x-slot name="content" class="items-center">
                    @foreach ($rooms as $room)
                        <x-dropdown-link :href="route('rooms.show', $room->id)" class="text-sm">
                            {{ $room->type }}
                        </x-dropdown-link>
                    @endforeach
                </x-slot>
            </x-dropdown>

            <x-responsive-nav-link :href="route('rental')" :active="request()->routeIs('rental')">
                {{ __('Rental') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                {{ __('Contact') }}
            </x-responsive-nav-link>
            @can('admin')
                <x-responsive-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')">
                    {{ __('User') }}
                </x-responsive-nav-link>
            @endcan
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            @auth
                <div class="px-4">
                    <div class="text-base font-medium text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                </div>
                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            @endauth

            <!-- Button Login jika belum login -->
            @guest
                <div>
                    <x-responsive-nav-link :href="route('login')">
                        {{ __('Login') }}
                    </x-responsive-nav-link>
                </div>
            @endguest
        </div>
    </div>
</nav>
