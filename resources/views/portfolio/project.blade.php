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
                        <div class=' text-center text-gray-500 text-4xl'>{{ $project->title }}</div>

                        <!-- image carousel -->




                        <section>
                            <div name='description'>

                            </div>

                            <div name='notices'>

                            </div>

                            <div name='project links'>

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
