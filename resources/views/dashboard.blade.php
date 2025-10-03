<x-app-layout>
    <div class="space-y-2">
        <!-- Header -->
        <div class="max-w-full">
            <div class="border overflow-hidden sm:rounded-lg">
                <div class="p-6">
                    <p class="text-gray-900 font-bold uppercase">
                        Profile
                    </p>
                    <!-- Dictionary-style explanation -->
                    <p class="text-xs text-gray-400 italic">
                        (noun) a brief description that summarizes an individual’s background, skills, and character.
                    </p>
                </div>
            </div>
        </div>

        <!-- Profile Content -->
        <div class="max-w-full">
            <div class="border overflow-hidden sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="">
                        <!-- Profile Header -->
                        <div class="flex flex-col">
                            <img src="{{ asset('assets/img/meh.jpg') }}" alt="Profile"
                                class="w-44 h-44 rounded-full border border-gray-200 p-2">

                            <h2 class="mt-4 text-2xl font-bold text-gray-900">Christian Ibana</h2>
                            <p class="text-gray-500">Computer Programmer III • Laravel & Tailwind Enthusiast</p>
                        </div>

                        <!-- Bio -->
                        <div class="mt-6 text-gray-700 leading-relaxed text-justify">
                            <div class="max-w-2xl">
                                <p>
                                    I'm a passionate Computer Programmer III who loves building clean, modern web
                                    applications. I enjoy solving complex problems, learning new technologies,
                                    and turning ideas into real projects. My primary focus is on
                                    <span class="font-semibold">Laravel</span>,
                                    <span class="font-semibold">Alpine.js</span>,
                                    <span class="font-semibold">HTMX</span>,
                                    <span class="font-semibold">Bootstrap</span>,
                                    <span class="font-semibold">Tailwind CSS</span>,
                                    but I also explore other tools that help me grow as a developer.
                                </p>
                            </div>
                        </div>

                        <!-- Quick Info -->
                        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-gray-600">
                            <div class="p-4 border rounded-lg transition">
                                <h3 class="font-semibold text-gray-800">Email</h3>
                                <p>ibanachano@gmail.com</p>
                            </div>
                            <div class="p-4 border rounded-lg transition">
                                <h3 class="font-semibold text-gray-800">Location</h3>
                                <p>Dasmariñas Cavite, Philippines</p>
                            </div>
                            <div class="p-4 border rounded-lg transition">
                                <h3 class="font-semibold text-gray-800">Education</h3>
                                <p>Bachelor of Science in Information Technology</p>
                            </div>
                            <div class="p-4 border rounded-lg transition">
                                <h3 class="font-semibold text-gray-800">Hobbies</h3>
                                <p>Coding, creating beats, gaming, and relaxing at the beach</p>
                            </div>
                        </div>

                        <!-- Certifications -->
                        <div class="mt-10">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">Certifications</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 text-sm text-gray-600">
                                <div class="p-4 border rounded-lg transition">
                                    <h4 class="font-semibold text-gray-800">Laravel Certification</h4>
                                    <p class="text-xs text-gray-500">Issued: 2023</p>
                                </div>
                                <div class="p-4 border rounded-lg transition">
                                    <h4 class="font-semibold text-gray-800">Tailwind CSS Pro</h4>
                                    <p class="text-xs text-gray-500">Issued: 2022</p>
                                </div>
                                <div class="p-4 border rounded-lg transition">
                                    <h4 class="font-semibold text-gray-800">AWS Cloud Practitioner</h4>
                                    <p class="text-xs text-gray-500">Issued: 2021</p>
                                </div>
                                <div class="p-4 border rounded-lg transition">
                                    <h4 class="font-semibold text-gray-800">Database Design</h4>
                                    <p class="text-xs text-gray-500">Issued: 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
