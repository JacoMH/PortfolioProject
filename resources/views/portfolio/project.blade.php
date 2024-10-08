<x-visitor>
    <div class='text-center p-3'>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Portfolio') }}
        </h2>    
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @forelse ($projects as $project)
                        <div class=' text-center text-gray-500 text-4xl mb-2'>{{ $project->title }}</div>
                            <!-- image carousel from flowbite -->
                            <div id="controls-carousel" class="relative w-full" data-carousel="static">
                                <!-- Carousel wrapper -->
                                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                     <!-- Items-->
                                     @foreach ($projectImages as $image )
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="{{ $image->imageLink }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                    </div>
                                    @endforeach
                                </div>
                                <!-- Slider controls -->
                                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </button>
                                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>
                            </div>


                        


                        <section class='flex justify-between p-3'>
                            <div name='description' class='border-2 rounded-md border-gray-400 flex flex-col max-w-[250px] bg-gray-100 p-2'>
                                <span class='underline text-xl'>Description</span>
                                {{ $project->Description}}
                            </div>

                            <div name='notices' class='border-2 rounded-md border-gray-400 flex flex-col max-w-[250px] bg-gray-100 p-2'>
                                <span class='underline text-xl'>Notices</span>
                                {{ $project->Notices }}
                            </div>

                            <div name='project links' class='border-2 rounded-md border-gray-400 flex flex-col max-w-[250px] bg-gray-100 p-2'>
                                <span class='underline text-xl'>Links</span>
                                <a href='{{$project->projectLink}}' target='_blank' rel="noreferrer noopener">{{$project->projectLink}}</a> 
                            </div>
                        </section>

                        <section>
                            <span>Skills Used In this Project:</span>
                            @forelse ($skills as $skill)
                                <a href=' {{route('skills.index')}}'>{{ $skill->SkillName }}</a>
                            @empty

                            @endforelse
                        </section>
                    @empty
                    <div class='m-10'>
                        <div class=' text-center text-gray-500 text-2xl'>No Project</div>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-visitor>
