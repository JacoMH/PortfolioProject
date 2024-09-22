<x-visitor>
    <div class='text-center p-3'>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Portfolio') }}
        </h2>    
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @forelse ($projects as $project)
                        <div class=' text-center text-gray-500 text-4xl mb-2'>{{ $project->title }}</div>

                        <!-- image carousel -->
                        @foreach ($projectImages as $image)
                        <img class='flex justify-center max-w-[500px] w-full'src='{{ $image->imageLink }}'></img>
                    
                        @endforeach


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
