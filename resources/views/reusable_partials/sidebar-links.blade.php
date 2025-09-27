<nav id="sidebar" class="lg:w-[250px] max-lg:fixed transition-all duration-500 shrink-0 z-[100] shadow-xl">
    <div id="sidebar-collapse-menu"
        class="h-screen fixed top-0 left-0 overflow-y-auto overflow-x-hidden z-[99] lg:w-[250px] max-lg:w-0 max-lg:invisible transition-all duration-500 thin-scrollbar">

        <div class="mb-5 py-12 sticky top-0 min-h-[64px] z-50">

            <div class="bg-white flex flex-col items-center">
                <!-- User Image -->
                <img src="{{ asset('assets/img/cipherinlet-black.png') }}" alt="User" class="w-24 h-24">

                <!-- Name -->
                <h3 class="mt-4 text-lg font-semibold text-gray-900">CIWORKS</h3>

                <!-- Position -->
                <p class="text-sm text-gray-500">By Christian Renie V. Ibana</p>
            </div>

        </div>

        {{-- Sidebar links --}}
        <div class="px-4 pb-4">
            <ul class="mb-6 space-y-2">
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="
                            {{ request()->routeIs('dashboard') ? 'bg-gray-900 text-white' : '' }}
                            flex items-center gap-2 cursor-pointer hover:bg-gray-900 hover:text-white rounded-md p-3 transition-all duration-300 group "
                        hx-get="{{ route('dashboard') }}" hx-target="#app" hx-swap="innerHTML" hx-push-url="true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                        <span
                            class="overflow-hidden text-ellipsis whitespace-nowrap font-bold font-sans text-sm tracking-widest">Profile</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('work.experience') }}"
                        class="
                            {{ request()->routeIs('work.experience') ? 'bg-gray-900 text-white' : '' }}
                            flex items-center gap-2 cursor-pointer hover:bg-gray-900 hover:text-white rounded-md p-3 transition-all duration-300"
                        hx-get="{{ route('dashboard') }}" hx-target="#app" hx-swap="innerHTML" hx-push-url="true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                        <span class="overflow-hidden text-ellipsis whitespace-nowrap font-bold font-sans text-sm tracking-widest">Work
                            Experience</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('projects') }}"
                        class="
                            {{ request()->routeIs('projects') ? 'bg-gray-900 text-white' : '' }}
                            flex items-center gap-2 cursor-pointer hover:bg-gray-900 hover:text-white rounded-md p-3 transition-all duration-300"
                        hx-get="{{ route('dashboard') }}" hx-target="#app" hx-swap="innerHTML" hx-push-url="true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                        <span
                            class="overflow-hidden text-ellipsis whitespace-nowrap font-bold font-sans text-sm tracking-widest">Projects</span>
                    </a>
                </li>

                                <li>
                    <a href="{{ route('contact') }}"
                        class="
                            {{ request()->routeIs('contact') ? 'bg-gray-900 text-white' : '' }}
                            flex items-center gap-2 cursor-pointer hover:bg-gray-900 hover:text-white rounded-md p-3 transition-all duration-300"
                        hx-get="{{ route('dashboard') }}" hx-target="#app" hx-swap="innerHTML" hx-push-url="true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                        </svg>
                        <span
                            class="overflow-hidden text-ellipsis whitespace-nowrap font-bold font-sans text-sm tracking-widest">Let's Connect</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
