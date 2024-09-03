<x-layout>
    <div class="row">
        <div class="col-6">
            @if(isset($monsterImg))
                <img src="{{$monsterImg }}" alt="">
            @else
                <p>Immagine non disponibile</p>
            @endif

        </div>
        <div class="col-12 d-flex flex-wrap ">
            <div class="m-5">
                <h1>{{$monster['name'] ?? ''}}</h1>
                <p>Size: {{$monster['size'] ?? ''}}</p>
                <p>Type: {{$monster['type'] ?? ''}}</p>
                <p>Alignment: {{$monster['alignment'] ?? ''}}</p>
                <p>
                    Armor_class:
                    @foreach ($monster['armor_class'] as $armor_class)
                    <ul>
                        <li>{{$armor_class['type'] ?? ''}}</li>
                        <li>{{$armor_class['value'] ?? ''}}</li>
                    </ul>
                    @endforeach
                </p>
        
            </div>
            <div class="m-5">
                <h3>Danno</h3>
                <p>Punti ferita {{$monster['hit_points'] ?? ''}}</p>
                <p>Dadi Vita: {{$monster['hit_dice'] ?? ''}}</p>
                <p>Hit points roll: {{$monster['hit_points_roll'] ?? ''}}</p>

                <h3>Movimento</h3>
                <p>A Piedi: {{$monster['speed']['walk'] ?? ''}}</p>
                <p>Nuoto: {{$monster['speed']['swim'] ?? ''}}</p>
            </div>
            <div >
                <h3>Statistiche</h3>
                <div class="d-flex">
                    <p class="me-5">Forza <br>{{$monster['strength'] ?? ''}}</p>
                    <p class="me-5">Destrezza <br>{{$monster['dexterity'] ?? ''}}</p>
                    <p class="me-5">Costistuzione <br>{{$monster['constitution'] ?? ''}}</p>
                    <p class="me-5">Intelligenza <br>{{$monster['intelligence'] ?? ''}}</p>
                    <p class="me-5">Saggezza <br>{{$monster['wisdom'] ?? ''}}</p>
                    <p class="me-5">Carisma <br>{{$monster['charisma'] ?? ''}}</p>
                </div>
            </div>
            <div class="m-5">
                <h3>Competenza</h3>
                <div class="d-flex ">
                    @foreach($monster['proficiencies'] as $proficiency)
                    <div>
                        <p>{{$proficiency['proficiency']['name']}}</p>
                    </div>
                    <div class="me-5">
                        <p>{{$proficiency['value']}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            {{-- <div class="me-5">
                <h3>Resistenze</h3>
                <div>
                    @if(isset($monster['damage_vulnerabilities']))
                        <p>{{$monster['damage_vulnerabilities'] ?? ''}}</p>
                    @else
                        <p></p>
                    @endif
                    @if(isset($monster['damage_resistances']))
                        <p>{{$monster['damage_resistances'] ?? ''}}</p>
                    @else
                        <p></p>
                    @endif
                    @if(isset($monster['damage_immunities']))
                        <p>{{$monster['damage_immunities'] ?? ''}}</p>
                    @else
                        <p></p>
                    @endif
                    @if(isset($monster['condition_immunities']))
                        <p>{{$monster['condition_immunities'] ?? ''}}</p>
                    @else
                        <p></p>
                    @endif
                </div>
            </div> --}}
            <div class="m-5">
                <h3>Sensi</h3>
                <div>
                    <p>Scurovisione{{$monster['senses']['darkvision'] ?? ''}}</p>
                    <p>Percezione passiva{{$monster['senses']['passive_perception'] ?? ''}}</p>
                    <p>Linguaggio{{$monster['languages'] ?? ''}}</p>
                    <p>Challenge_rating{{$monster['challenge_rating'] ?? ''}}</p>
                    <p>Proficiency_bonus {{$monster['proficiency_bonus'] ?? ''}}</p>
                    <p>Xp {{$monster['xp'] ?? ''}}</p>
                </div>
            </div>
            <div class="m-5">
                <h3>Abilità Speciali</h3>
                @foreach($monster['special_abilities'] as $specialAbilities)
                <div>
                    <h5>{{$specialAbilities['name']}}</h5>
                    <p>{{$specialAbilities['desc']}}</p>
                    <p>{{$specialAbilities['dc']['dc_type']['name'] ?? ''}}</p>
                    <p>{{$specialAbilities['dc']['dc_value'] ?? ''}}</p>
                    <p>{{$specialAbilities['dc']['success_type'] ?? ''}}</p>
                </div>
                @endforeach
            </div>
            <div>
                <h3>Azioni</h3>
                <div>
                    @foreach($monster['actions'] as $action)
                    <h5>{{$action['name']}}</h5>
                    <p>{{$action['multiattack_type'] ?? ''}}</p>
                    <p>{{$action['desc']}}</p>
                    <p>Attacco Bonus :{{$action['attack_bonus'] ?? ''}}</p>
                        @foreach($action['actions'] as $type)
                            <p>{{$type['action_name'] ?? ''}}</p>
                            <p>{{$type['count']?? ''}} </p>
                            <p>{{$type['type'] ?? ''}}</p>
                        @endforeach
                    <p>{{$action['dc']['dc_type']['name'] ?? ''}}</p>
                    <p>{{$action['dc']['dc_value']['name'] ?? ''}}</p>
                    <p>{{$action['dc']['success_type'] ?? ''}}</p>
                        @if(isset($action['damage']))
                                @foreach($action['damage'] as $damage)
                                    <p>{{$damage['damage_type']['name']}}</p>
                                    <p>{{$damage['damage_dice']}}</p>
                                @endforeach
                            @else
                                <p></p>
                        @endif
                    @endforeach
                </div>
            </div>
            <div>
                <h3>Azioni Leggendarie</h3>
                <div>
                    @foreach($monster['legendary_actions'] as $legendaryAction)
                    <h5>{{$legendaryAction['name']}}</h5>
                    <p>{{$legendaryAction['desc']}}</p>
                    <p>{{$legendaryAction['attack_bonus'] ?? ''}} </p>
                        @if(isset($legendaryAction['damage']))
                            @foreach($legendaryAction['damage'] as $damage)
                                <p>{{$damage['damage_type']['name']}}</p>
                                <p>{{$damage['damage_dice']}}</p>
                            @endforeach
                        @else
                            <p></p>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
     
    </div>
</x-layout>