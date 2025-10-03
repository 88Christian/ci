<div x-data="{ open: false }">
    <!-- Floating Button -->
    <div @click="open = true"
        class="fixed bottom-6 right-6 bg-white border shadow-lg rounded-full px-5 py-3 flex items-center gap-2 cursor-pointer hover:bg-gray-100 transition z-50">
        <span class="text-base font-bold">Contact Me</span>
    </div>

    <!-- Overlay -->
    <div x-show="open" x-transition.opacity @click="open = false" class="fixed bg-black/25 inset-0 z-40"></div>

    <!-- Sliding Contact Form -->
    <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
        class="fixed bottom-0 right-0 w-96 h-auto bg-white border shadow z-50 p-6 rounded-l-xl">
        <!-- Close Button -->
        <button @click="open = false" class="absolute top-4 right-4 text-gray-600 hover:text-black">✕</button>

        <!-- Form -->
        <h2 class="text-lg font-semibold mb-4">Contact Me</h2>

        <div class="space-y-6">
            <div>
            <div class="flex items-center">
                <div>
                    <h2 class="text-xl font-bold text-gray-900 mb-2">Hi, I'm Christian</h2>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        I enjoy creating meaningful projects and working with others to bring ideas to life.
                        I believe in staying curious, keeping things simple, and always giving my best.
                    </p>
                </div>


            </div>
        </div>

        <form action="#" method="POST" class="space-y-4">
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
            <div>
                <button type="submit"
                    class="w-full bg-gray-900 text-sm text-white px-4 py-2 rounded-md hover:bg-gray-700 transition">
                    Send Message
                </button>
            </div>
        </form>
        </div>
    </div>
</div>
