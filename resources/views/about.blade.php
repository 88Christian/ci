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
                    <div class="p-8 grid grid-cols-2 gap-6">

                        <!-- Laravel -->
                        <div class="p-6 border rounded-lg transition">
                            <h2 class="text-xl font-bold text-gray-900">Laravel</h2>
                            <p class="text-sm text-gray-600 font-medium">PHP Framework</p>
                            <ul class="mt-3 text-gray-700 text-sm list-disc list-inside space-y-1">
                                <li>Provides a robust backend structure with MVC architecture.</li>
                                <li>Handles authentication, routing, and database operations securely.</li>
                                <li>Speeds up development with artisan commands and built-in tools.</li>
                            </ul>
                        </div>

                        <!-- TailwindCSS -->
                        <div class="p-6 border rounded-lg transition">
                            <h2 class="text-xl font-bold text-gray-900">Bootstrap & TailwindCSS</h2>
                            <p class="text-sm text-gray-600 font-medium">CSS Framework</p>
                            <ul class="mt-3 text-gray-700 text-sm list-disc list-inside space-y-1">
                                <li>Utility-first design for building responsive layouts quickly.</li>
                                <li>Ensures consistent styling and modern UI design.</li>
                                <li>Eliminates the need to write large amounts of custom CSS.</li>
                            </ul>
                        </div>

                        <!-- HTMX -->
                        <div class="p-6 border rounded-lg transition">
                            <h2 class="text-xl font-bold text-gray-900">Alpine & HTMX</h2>
                            <p class="text-sm text-gray-600 font-medium">Dynamic Interaction</p>
                            <ul class="mt-3 text-gray-700 text-sm list-disc list-inside space-y-1">
                                <li>Makes pages interactive without writing heavy JavaScript.</li>
                                <li>Handles AJAX requests seamlessly with simple HTML attributes.</li>
                                <li>Improves UX by updating parts of the page without reloading.</li>
                            </ul>
                        </div>

                        <!-- MySQL -->
                        <div class="p-6 border rounded-lg transition">
                            <h2 class="text-xl font-bold text-gray-900">MySQL</h2>
                            <p class="text-sm text-gray-600 font-medium">Database</p>
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
