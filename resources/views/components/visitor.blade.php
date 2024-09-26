<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <div class='flex justify-center'>
                <section class='max-w-[600px] w-full'>
                    <footer class='mt-2 border-gray-600 flex justify-between border-t p-5'>
                        <div>
                            <!-- github here -->
                            <a href='https://github.com/JacoMH' target='_blank' rel="noreferrer noopener">Github</a>
                        </div>
                        
                        <div>
                            <!-- linkedin here -->
                            <a href='https://www.linkedin.com/in/jacob-heyes-204b70297/' target='_blank' rel="noreferrer noopener">LinkedIn</a>
                        </div>
            
                        <div>
                            <!-- email here -->
                            <span>heyesjacob@gmail.com</span>
                        </div>
                     </footer>
                </section>
            </div>
            
        </div>
    </body>
</html>
