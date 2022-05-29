<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>
                    @auth
                        {{-- ======== START ::: Staff and Admin ======== --}}
                        @if (Auth::user()->role == "staff" || Auth::user()->role == "admin")
                        <x-nav-link :href="route('staffReservation')" :active="request()->routeIs('staffReservation')">
                            {{ __('Reservations List') }}
                        </x-nav-link>
                        @endif

                        @if (Auth::user()->role == "staff" || Auth::user()->role == "admin")
                        <x-nav-link :href="route('staffOrder')" :active="request()->routeIs('staffOrder')">
                            {{ __('Orders List') }}
                        </x-nav-link>
                        @endif

                        @if (Auth::user()->role == "admin")
                        <x-nav-link :href="route('adminMenuList')" :active="request()->routeIs('adminMenuList')">
                            {{ __('Menus List') }}
                        </x-nav-link>
                        @endif
                        {{-- ======== END ::: Staff and Admin ======== --}}



                        {{-- ======== START ::: User ======== --}}
                        @if (Auth::user()->role == "user")
                        <x-nav-link :href="route('userMenu')" :active="request()->routeIs('userMenu')">
                            {{ __('Our Menu') }}
                        </x-nav-link>

                        <x-nav-link :href="route('userReservation')" :active="request()->routeIs('userReservation')">
                            {{ __('Reservation') }}
                        </x-nav-link>
                        @endif
                        {{-- ======== END ::: User ======== --}}
                    @else
                    <x-nav-link :href="route('userMenu')" :active="request()->routeIs('userMenu')">
                        {{ __('Our Menu') }}
                    </x-nav-link>
                    @endauth
                </div>
            </div>

            @if (Route::has('login'))
            <div class="pl-6 py-4 sm:block my-auto">
                @auth
                {{-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> --}}
                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                @else
                    <a href="{{ route('login') }}" class="py-1 px-2 flex-1 bg-white hover:bg-gray-50 focus:ring-gray-200 focus:ring-offset-gray-200 text-gray-700 transition ease-in duration-200 text-center text-sm hover:shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg cursor-pointer">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-2 py-1 px-2 flex-1 bg-sky-600 hover:bg-sky-700 focus:ring-sky-500 focus:ring-offset-sky-200 text-white transition ease-in duration-200 text-center text-sm hover:shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg  cursor-pointer">Register</a>
                    @endif
                @endauth
            </div>
            @endif

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>
        </div>

        @auth
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
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
        </div>
        @endauth
    </div>
</nav>
