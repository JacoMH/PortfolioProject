<x-visitor>
    @include('components.navigation')

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
</x-visitor>

