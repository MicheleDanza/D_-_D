<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ConditionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $conditions = [
            [
                'index' => 'blinded',
                'name' => 'Blinded',
                'descriptions' => json_encode([
                    'A blinded creature can’t see and automatically fails any ability check that requires sight.',
                    'Attack rolls against the creature have advantage, and the creature’s attack rolls have disadvantage.'
                ])
            ],
            [
                'index' => 'charmed',
                'name' => 'Charmed',
                'descriptions' =>json_encode( [
                    'A charmed creature can’t attack the charmer or target the charmer with harmful abilities or magical effects.',
                    'The charmer has advantage on any ability check to interact socially with the creature.'
                ])
            ],
            [
                'index' => 'deafened',
                'name' => 'Deafened',
                'descriptions' => json_encode([
                    'A deafened creature can’t hear and automatically fails any ability check that requires hearing.',
                    'Attack rolls against the creature have disadvantage, and the creature’s attack rolls have disadvantage.'
                ])
            ],
            [
                'index' => 'frightened',
                'name' => 'Frightened',
                'descriptions' => json_encode([
                    'A frightened creature has disadvantage on ability checks and attack rolls while the source of its fear is within line of sight.',
                    'The creature can’t willingly move closer to the source of its fear.'
                ])
            ],
            [
                'index' => 'paralyzed',
                'name' => 'Paralyzed',
                'descriptions' =>json_encode( [
                    'A paralyzed creature is incapacitated and can’t move or speak.',
                    'The creature automatically fails Strength and Dexterity saving throws.',
                    'Attack rolls against the creature have advantage, and any attack that hits the creature is a critical hit if the attacker is within 5 feet of the creature.'
                ])
            ],
            [
                'index' => 'petrified',
                'name' => 'Petrified',
                'descriptions' =>json_encode( [
                    'A petrified creature is transformed, along with any nonmagical objects it is wearing or carrying, into a solid inanimate substance (usually stone).',
                    'The creature is incapacitated, can’t move or speak, and is unaware of its surroundings.',
                    'Attack rolls against the creature have advantage.'
                ])
            ],
            [
                'index' => 'poisoned',
                'name' => 'Poisoned',
                'descriptions' =>json_encode( [
                    'A poisoned creature has disadvantage on attack rolls and ability checks.'
                ])
            ],
            [
                'index' => 'prone',
                'name' => 'Prone',
                'descriptions' =>json_encode( [
                    'A prone creature’s only movement option is to crawl, unless it stands up and thereby ends the condition.',
                    'The creature has disadvantage on attack rolls, and attack rolls against the creature have advantage if the attacker is within 5 feet of the creature.'
                ])
            ],
            [
                'index' => 'restrained',
                'name' => 'Restrained',
                'descriptions' =>json_encode( [
                    'A restrained creature’s speed becomes 0, and it can’t benefit from any bonus to its speed.',
                    'Attack rolls against the creature have advantage, and the creature’s attack rolls have disadvantage.',
                    'The creature has disadvantage on Dexterity saving throws.'
                ])
            ],
            [
                'index' => 'stunned',
                'name' => 'Stunned',
                'descriptions' =>json_encode( [
                    'A stunned creature is incapacitated, can’t move, and can speak only falteringly.',
                    'The creature automatically fails Strength and Dexterity saving throws.',
                    'Attack rolls against the creature have advantage.'
                ])
            ],
            [
                'index' => 'unconscious',
                'name' => 'Unconscious',
                'descriptions' =>json_encode( [
                    'An unconscious creature is incapacitated, can’t move or speak, and is unaware of its surroundings.',
                    'The creature automatically fails Strength and Dexterity saving throws.',
                    'Attack rolls against the creature have advantage, and any attack that hits the creature is a critical hit if the attacker is within 5 feet of the creature.'
                ])
            ],
        ];

        // Inserisci i dati nella tabella
        foreach ($conditions as $condition) {
            DB::table('conditions')->updateOrInsert(
                ['index' => $condition['index']],
                [
                    'name' => $condition['name'],
                    'descriptions' => $condition['descriptions']
                ]
            );
        }
    }
}
