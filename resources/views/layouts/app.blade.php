<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GMMS</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    <!-- Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    {{-- Apex chart CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Favicon --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/PCW-logo-violet-smallest.png') }}">

    <style>
        .thin-scrollbar {
            scrollbar-width: thin;
            /* Firefox */
            -ms-overflow-style: auto;
            /* IE and Edge */
        }

        .thin-scrollbar::-webkit-scrollbar {
            width: 6px;
            /* Thin scrollbar for Chrome, Safari, Opera */
        }

        .thin-scrollbar::-webkit-scrollbar-thumb {
            background-color: rgba(100, 100, 100, 0.5);
            /* Customize thumb color */
            border-radius: 4px;
        }

        .thin-scrollbar::-webkit-scrollbar-track {
            background-color: transparent;
            /* Optional: hide track */
        }

        [x-cloak] {
            display: none !important;
        }

        .htmx-progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            background: #6b46c1;
            /* purple */
            width: 0%;
            /* no transition by default */
            z-index: 9999;
        }

        .ck-editor__editable_inline {
            min-height: 200px !important;
            max-height: 200px !important;
            height: 200px !important;
            overflow-y: auto;
        }
    </style>
</head>

<body id="app" class="font-sans antialiased">
    <!-- Progress Bar -->
    <div id="htmx-progress" class="fixed top-0 left-0 w-0 h-0.5 bg-purple-500 z-[9999]"></div>
    
    <div class="min-h-screen">
        <div class="relative h-full min-h-screen font-[sans-serif]">
            <div class="flex items-start">

                @include('reusable_partials.sidebar-links')

                <section class="w-full min-h-screen main-content border-l">

                    <div>
                        <main class="w-full lg:flex-1 p-2">
                            {{ $slot }}
                        </main>
                    </div>

                </section>

            </div>
        </div>
    </div>

    {{-- Progress bar --}}
    <script>
        function shouldSkipProgress(evt) {
            // Check if the event's target element or any of its parents has the attribute `data-no-progress`
            return evt.target.closest('[data-no-progress]') !== null;
        }

        document.addEventListener('htmx:configRequest', (evt) => {
            if (shouldSkipProgress(evt)) return;

            const bar = document.getElementById('htmx-progress-bar');
            if (!bar) return;

            bar.style.transition = 'none';
            bar.style.width = '0%';
            bar.style.display = 'block';

            void bar.offsetWidth;

            bar.style.transition = 'width 0.3s ease';
        });

        document.addEventListener('htmx:beforeRequest', (evt) => {
            if (shouldSkipProgress(evt)) return;

            const bar = document.getElementById('htmx-progress-bar');
            if (!bar) return;

            bar.style.width = '50%';
        });

        document.addEventListener('htmx:afterRequest', (evt) => {
            if (shouldSkipProgress(evt)) return;

            const bar = document.getElementById('htmx-progress-bar');
            if (!bar) return;

            bar.style.width = '100%';

            setTimeout(() => {
                bar.style.transition = 'none';
                bar.style.display = 'none';
                bar.style.width = '0%';
            }, 300);
        });
    </script>


    <script>
        function confirmLogout(button) {
            if (confirm('Are you sure you want to logout?')) {
                button.closest('form').submit();
            }
        }
    </script>
</body>

</html>
