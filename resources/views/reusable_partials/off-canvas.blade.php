
    <div x-data="{ open: false }">
        <!-- Floating Button -->
        <div @click="open = true"
            class="fixed bottom-6 right-6 bg-white border shadow-lg rounded-full px-5 py-3 flex items-center gap-2 cursor-pointer hover:bg-gray-100 transition z-50">
            <span class="text-base font-bold">Let's Connect</span>
        </div>

        <!-- Overlay -->
        <div x-show="open" x-transition.opacity @click="open = false" class="fixed bg-black/25 inset-0 z-40"></div>

        <!-- Sliding Contact Form -->
        <div x-show="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            class="fixed bottom-0 right-0 w-96 h-auto bg-white border shadow z-50 p-6 rounded-l-xl">
            <!-- Close Button -->
            <button @click="open = false" class="absolute top-4 right-4 text-gray-600 hover:text-black">✕</button>

            <!-- Form -->
            <h2 class="text-lg font-semibold mb-4">Contact Me</h2>
            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name"
                        class="w-full border rounded-md px-3 py-2 text-sm focus:ring focus:ring-blue-200">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email"
                        class="w-full border rounded-md px-3 py-2 text-sm focus:ring focus:ring-blue-200">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea name="message" rows="4"
                        class="w-full border rounded-md px-3 py-2 text-sm focus:ring focus:ring-blue-200"></textarea>
                </div>
                <div>
                    <button type="submit"
                        class="w-full bg-gray-900 text-white rounded-md py-2 hover:bg-gray-700 transition">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>