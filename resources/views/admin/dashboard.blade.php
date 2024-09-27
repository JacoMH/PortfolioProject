<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- add -->
            <x-primary-button class='mb-2'><a href='{{ route('admin.add') }}'>Add</a></x-primary-button>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class='flex flex-wrap justify-center'>
                    @forelse ($projects as $project)
                        <a href='{{ route('admin.editPage', $project->id)}}' class=' m-4 border-2 rounded-md border-gray-400 flex flex-col max-w-[250px] bg-gray-100 p-2 transition ease-in-out hover:scale-110'>
                            <div class=' text-center text-gray-500 text-xl p-1'>{{ $project->title }}</div>
                            <!-- image thumbnail -->
                            @if($project->images->isNotEmpty())
                                @foreach($project->images as $image)
                                    @if ($loop->index == 0) <!-- if image is 1st in the array it is displayed, otherwise it is not -->
                                    <img class='max-w-[200px] self-center pb-2' src='{{ $image->imageLink}}'></img>
                                    @endif
                                
                                @endforeach
                                @else
                                <div class='text-center text-gray-500'>No image available</div>
                                @endif
                            <div class=' text-center text-gray-500 text-xl p-1'>{{ $project->updated_at->DiffForHumans()}}</div>
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
</x-app-layout>
