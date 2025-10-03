<x-app-layout>
    <div class="space-y-2">
        <!-- Header -->
        <div class="max-w-full">
            <div class="border overflow-hidden sm:rounded-lg">
                <div class="p-6">
                    <p class="text-gray-900 font-bold uppercase">
                        Technology Stack
                    </p>
                    <!-- Dictionary-style explanation -->
                    <p class="text-xs text-gray-400 italic">
                        (noun) the set of frameworks, libraries, and tools used to design, build, and run this
                        application.
                    </p>
                </div>
            </div>
        </div>

        <!-- Technologies Used -->
        <div class="max-w-full">
            <div class="border overflow-hidden sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-2 gap-6">

                        <!-- Laravel -->
                        <div class="p-6 border rounded-lg transition">
                            <!-- Image + Title Row -->
                            <div class="flex items-center gap-3 mb-3">
                                <img src="{{ asset('assets/img/laravel-logo.png') }}" alt="Laravel Logo" class="w-12">
                                <div>
                                    <h2 class="text-xl font-bold text-gray-900">Laravel</h2>
                                    <p class="text-sm text-gray-600 font-medium">PHP Framework</p>
                                </div>
                            </div>

                            <!-- List -->
                            <ul class="mt-3 text-gray-700 text-sm list-disc list-inside space-y-1">
                                <li>Provides a robust backend structure with MVC architecture.</li>
                                <li>Handles authentication, routing, and database operations securely.</li>
                                <li>Speeds up development with artisan commands and built-in tools.</li>
                            </ul>
                        </div>



                        <!-- Bootstrap -->
                        <div class="p-6 border rounded-lg transition">
                            <div class="flex items-center gap-3 mb-3">
                                <img src="{{ asset('assets/img/bootstrap-logo.png') }}" alt="Bootstrap Logo"
                                    class="w-12">
                                <div>
                                    <h2 class="text-xl font-bold text-gray-900">Bootstrap</h2>
                                    <p class="text-sm text-gray-600 font-medium">CSS Framework</p>
                                </div>
                            </div>
                            <ul class="mt-3 text-gray-700 text-sm list-disc list-inside space-y-1">
                                <li>Provides pre-styled components and grid system.</li>
                                <li>Ensures cross-browser compatibility and responsiveness.</li>
                                <li>Speeds up UI development with ready-to-use utilities.</li>
                            </ul>
                        </div>

                        <!-- TailwindCSS -->
                        <div class="p-6 border rounded-lg transition">
                            <div class="flex items-center gap-3 mb-3">
                                <img src="{{ asset('assets/img/tailwindcss-logo.png') }}" alt="TailwindCSS Logo"
                                    class="w-12">
                                <div>
                                    <h2 class="text-xl font-bold text-gray-900">TailwindCSS</h2>
                                    <p class="text-sm text-gray-600 font-medium">Utility-First CSS Framework</p>
                                </div>
                            </div>
                            <ul class="mt-3 text-gray-700 text-sm list-disc list-inside space-y-1">
                                <li>Utility-first design for building responsive layouts quickly.</li>
                                <li>Ensures consistent styling and modern UI design.</li>
                                <li>Eliminates the need to write large amounts of custom CSS.</li>
                            </ul>
                        </div>

                        <!-- AlpineJS -->
                        <div class="p-6 border rounded-lg transition">
                            <div class="flex items-center gap-3 mb-3">
                                <img src="{{ asset('assets/img/alpine-logo.png') }}" alt="AlpineJS Logo"
                                    class="w-12">
                                <div>
                                    <h2 class="text-xl font-bold text-gray-900">AlpineJS</h2>
                                    <p class="text-sm text-gray-600 font-medium">Lightweight JavaScript Framework</p>
                                </div>
                            </div>
                            <ul class="mt-3 text-gray-700 text-sm list-disc list-inside space-y-1">
                                <li>Adds interactivity with minimal JavaScript code.</li>
                                <li>Works well with Blade templates and Livewire.</li>
                                <li>Keeps frontend logic small and manageable.</li>
                            </ul>
                        </div>

                        <!-- HTMX -->
                        <div class="p-6 border rounded-lg transition">
                            <div class="flex items-center gap-3 mb-3">
                                <img src="{{ asset('assets/img/htmx-logo.png') }}" alt="HTMX Logo" class="w-12">
                                <div>
                                    <h2 class="text-xl font-bold text-gray-900">HTMX</h2>
                                    <p class="text-sm text-gray-600 font-medium">Dynamic Interaction</p>
                                </div>
                            </div>
                            <ul class="mt-3 text-gray-700 text-sm list-disc list-inside space-y-1">
                                <li>Makes pages interactive without writing heavy JavaScript.</li>
                                <li>Handles AJAX requests seamlessly with simple HTML attributes.</li>
                                <li>Improves UX by updating parts of the page without reloading.</li>
                            </ul>
                        </div>

                        <!-- MySQL -->
                        <div class="p-6 border rounded-lg transition">
                            <div class="flex items-center gap-3 mb-3">
                                <img src="{{ asset('assets/img/mysql-logo.png') }}" alt="MySQL Logo" class="w-12">
                                <div>
                                    <h2 class="text-xl font-bold text-gray-900">MySQL</h2>
                                    <p class="text-sm text-gray-600 font-medium">Database</p>
                                </div>
                            </div>
                            <ul class="mt-3 text-gray-700 text-sm list-disc list-inside space-y-1">
                                <li>Stores and organizes application data efficiently.</li>
                                <li>Ensures relational integrity between tables and entities.</li>
                                <li>Reliable and widely used for production environments.</li>
                            </ul>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
