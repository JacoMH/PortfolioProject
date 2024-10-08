<x-visitor>
    @include('components.navigation')
    <div class='text-center p-3'>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Portfolio') }}
        </h2>    
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">               
            </div>       
            
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg h-screen">
                <div class="p-6 text-gray-900 flex-col flex justify-center items-center">
                    <!-- filter -->
                    {{dd($projects)}}
                    
                    @forelse ($projects as $project)
                        <a href='{{ route('portfolio.show', $project->id)}}' class=' m-4 border-2 rounded-md border-gray-400 flex flex-col max-w-[900px] min-w-[600px] w-full bg-gray-100 p-2 transition ease-in-out hover:scale-105'>
                            <!-- image thumbnail -->
                                <div class='text-gray-500 text-xl p-1'>{{ $project->title }}</div>
                                @if($project->images->isNotEmpty())
                                @foreach($project->images as $image)
                                    @if ($loop->index == 0) <!-- if image is 1st in the array it is displayed, otherwise it is not -->
                                    <img class='max-w-[300px] self-start pb-2' src='{{ $image->imageLink}}'></img>
                                    @endif
                                
                                @endforeach
                                @else
                                <div class='text-center text-gray-500'>No image available</div>
                                @endif

                            <div>
    
                            </div>
                        </a>
                    @empty
                    <div class='m-10'>
                        <div class=' text-center text-gray-500 text-2xl'>No Projects</div>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-visitor>
