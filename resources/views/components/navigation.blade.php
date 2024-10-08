<section class='flex flex-row justify-between'>
    <div class='p-3 max-w-[700px] pr-4'>
        @if (Route::has('login'))
                    <div class="hidden top-0 right-0 sm:block">
                        @auth
                            <a href="{{ url('/admin/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register')) <!-- need to remove this when the project is complete -->
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
    </div>


            <div class='p-3 max-w-[700px] pr-4'>
                <a href='{{ url('/') }}' class='{{ request()->is('/') ? 'bg-indigo-200' : '' }}'>Welcome</a>
                <a href='{{ route('portfolio.index') }}' class='{{ request()->RouteIs('portfolio.index') ? 'bg-indigo-200' : '' }}'>Portfolio</a>
                <a href='{{ url('skills')}}' class='{{ request()->is('skills') ? 'bg-indigo-200' : '' }}'>Skills</a>
                <a href='{{ url('contact')}}' class='{{ request()->is('contact') ? 'bg-indigo-200' : '' }}'>Contact</a>
            </div>
</section>


