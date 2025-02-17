<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Waiver') }}</title>

        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" />
        {{-- <link rel="stylesheet" href="{{ asset('assets/vendors/apexcharts/apexcharts.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/keenicons/styles.bundle.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" /> --}}

        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="antialiased flex h-full text-base text-gray-700 [--tw-page-bg:#fefefe] [--tw-page-bg-dark:var(--tw-coal-500)] demo1 sidebar-fixed header-fixed bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark]">
        <script>
        const defaultThemeMode = 'light'; // light|dark|system
                let themeMode;

                if ( document.documentElement ) {
                    if ( localStorage.getItem('theme')) {
                            themeMode = localStorage.getItem('theme');
                    } else if ( document.documentElement.hasAttribute('data-theme-mode')) {
                        themeMode = document.documentElement.getAttribute('data-theme-mode');
                    } else {
                        themeMode = defaultThemeMode;
                    }

                    if (themeMode === 'system') {
                        themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
                    }

                    document.documentElement.classList.add(themeMode);
                }
        </script>
        @inertia

        {{-- <script src="{{ asset('assets/js/core.bundle.js') }}"></script> --}}
        {{-- <script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js') }}"></script> --}}
        {{-- <script src="{{ asset('assets/js/widgets/general.js') }}"></script> --}}
        {{-- <script src="{{ asset('assets/js/layouts/demo1.js') }}"></script> --}}
    </body>
</html>
