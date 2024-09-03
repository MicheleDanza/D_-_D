<x-layout>
    <h1>{{$class['name']}}</h1>
    <p>hit-die: {{$class['hit_die']}}</p>
    <h3>Proficiency_choices</h3>
    @foreach($class['proficiency_choices'] as $proficiencyChoices)
        <p>{{$proficiencyChoices['desc']}}</p>
        <p>Choose: {{$proficiencyChoices['choose']}}</p>
        <p>Type : {{$proficiencyChoices['type']}}</p>
        <h3>Skill</h3>
            @foreach($proficiencyChoices['from']['options'] as $skill)
                <p>{{$skill['item']['name']}}</p>
            @endforeach
    @endforeach
    <h3>Proficiency</h3>
    @foreach($class['proficiencies'] as $proficiencies)
        <p>{{$proficiencies['name']}}</p>
    @endforeach

    <h3>Saving_throws</h3>
    @foreach($class['saving_throws'] as $savingThrows)
        <p>{{$savingThrows['name']}}</p>
    @endforeach

    <h3>Starting_equipment</h3>
        @foreach($class['starting_equipment'] as $starting_equipment)
        <p>Equipment: {{$starting_equipment['equipment']['name']}}</p>
        <p>Quantity: {{$starting_equipment['quantity']}}</p>
        @endforeach
    
    <h3>Starting_equipment_options</h3>
        @foreach($class['starting_equipment_options' as $starting_equipment_options ])
            <h6></h6>
        @endforeach
</x-layout>