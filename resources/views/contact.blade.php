<x-app-layout>
    <div class="space-y-2">
        <!-- Header -->
        <div class="max-w-full">
            <div class="border overflow-hidden sm:rounded-lg">
                <div class="p-6">
                    <p class="text-gray-900 font-bold uppercase">
                        Let's Connect
                    </p>
                    <!-- Dictionary-style explanation -->
                    <p class="text-xs text-gray-400 italic">
                        (noun) a way to communicate and get in touch for opportunities or inquiries.
                    </p>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="max-w-full">
            <div class="border overflow-hidden sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">

                    <!-- Left: Contact Form -->
                    <div class="p-8 border-r">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Get in Touch</h2>

                        <form action="" method="POST" class="space-y-4">
                            @csrf

                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
                                <input type="text" name="name" id="name" required
                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-300 text-sm p-2">
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
                                <input type="email" name="email" id="email" required
                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-300 text-sm p-2">
                            </div>

                            <!-- Subject -->
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                                <input type="text" name="subject" id="subject" required
                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-300 text-sm p-2">
                            </div>

                            <!-- Message -->
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                <textarea name="message" id="message" rows="5" required
                                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-300 text-sm p-2"></textarea>
                            </div>

                            <!-- Submit -->
                            <div>
                                <button type="submit"
                                    class="bg-gray-900 text-sm text-white px-4 py-2 rounded-md hover:bg-gray-700 transition">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Right: Kind Message -->
                    <div class="p-8 flex items-center">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900 mb-4">Hi, I'm Christian</h2>
                            <p class="text-gray-700 leading-relaxed">
                                I'm a full-stack developer with a passion for building clean, efficient, and
                                user-friendly applications.
                                I enjoy working with modern frameworks like <strong>Laravel</strong>, <strong>TailwindCSS</strong>, <strong>AlpineJs</strong> and <strong>HTMX</strong>, and I'm
                                always excited to learn and
                                apply new technologies. My goal is to create solutions that not only work but also make
                                an impact.
                            </p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
