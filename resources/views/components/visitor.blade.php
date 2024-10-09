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
                    <footer>
                        <div class='mt-2 border-blue-500 flex justify-between bg-gradient-to-r border-t from-transparent via-blue-700 to-transparent h-0.5 w-full'>                        </div>
                        <section class='flex flex-row justify-between p-10'>
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
                        </section>
                     </footer>
                </section>
            </div>
            
        </div>
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    </body>
</html>
