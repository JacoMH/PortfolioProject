<x-visitor>
    @include('components.navigation')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Skills') }}
    </h2>  
    <div class="overflow-hidden shadow-sm sm:rounded-lg h-screen">
                <!-- Technical Skills -->
        <span>Technical Skills</span>
        @forelse ($TechnicalSkills as $TechnicalSkill)
            <span>{{$TechnicalSkill->SkillName}}</span>
            <span>{{$TechnicalSkill->Description}}</span>
        @empty
        <span>No Technical Skills</span>

        @endforelse

        <!-- Personal Skills -->
        <span>Personal Skills</span>
        @forelse ($PersonalSkills as $PersonalSkill)
            <span>{{$PersonalSkill->SkillName}}</span>
            <span>{{$PersonalSkill->Description}}</span>
        @empty
        <span>No Personal Skills</span>

        @endforelse
    </div>
</x-visitor>

