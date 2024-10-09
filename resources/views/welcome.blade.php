<x-visitor>
    @include('components.navigation')
        <section class='flex flex-col h-screen' >
            <div class='text-center'>
                <section class='mr-auto'>
                    <div class='text-5xl text-blue-500 mb-12 mt-[60px]'>
                        Jacob Heyes
                    </div>
                </section>

                <section class='flex flex-row justify-between mr-10'>
                    <div class='text-left ml-12 text-lg leading-relaxed text-gray-700 content-center'>
                        I am
                        a 2nd year <span class='text-blue-500'>Software Engineering</span> student studying at <a class='text-blue-500 hover:scale-105 hover:underline' href='https://www.shu.ac.uk/' target='_blank' rel="noreferrer noopener">Sheffield Hallam University.</a> </br>
                        This is a <span class='text-blue-500'>self-made</span> website to display my knowledge of the field </br>
                        and what projects I have been working, or have worked on.
                    </div>
    
                    <!-- switch to another image -->
                    <div>
                        <img class='max-w-[350px] rounded-lg shadow-lg ring-4 ring-blue-500 ring-opacity-50 ring-offset-2 ring-offset-blue-200 hover:ring-opacity-100 hover:ring-offset-4 hover:scale-105 transition-all duration-300 ease-in-out' src='https://media.sproutsocial.com/uploads/2022/06/profile-picture.jpeg'></img>
                    </div>
                </section>
        

                
                <div class='mt-9'>
                    <a href="{{ route('portfolio.index')}}" class="relative inline-flex items-center justify-center p-10 px-12 py-7 overflow-hidden font-medium text-blue-600 transition duration-300 ease-out border-2 border-blue-600 rounded-full shadow-md group">
                        <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-blue-600 group-hover:translate-x-0 ease">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </span>
                        <span class="absolute flex items-center justify-center w-full h-full text-blue-500 transition-all duration-300 transform group-hover:translate-x-full ease text-xl">Portfolio</span>
                        <span class="relative invisible">Portfolio</span>
                        </a>
                </div>
            </div>
        </section>
</x-visitor>

