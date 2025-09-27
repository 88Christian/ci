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


    <script>
        function confirmLogout(button) {
            if (confirm('Are you sure you want to logout?')) {
                button.closest('form').submit();
            }
        }
    </script>
</body>

</html>
