<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DamageTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $damageTypes = [
            [
                'index' => 'acid',
                'name' => 'Acid',
                'descriptions' => [
                    'Acid damage corrodes and burns the target.',
                    'Commonly associated with alchemical substances and acidic creatures.'
                ]
            ],
            [
                'index' => 'bludgeoning',
                'name' => 'Bludgeoning',
                'descriptions' => [
                    'Bludgeoning damage is caused by blunt force impacts.',
                    'It is commonly dealt by weapons like maces, hammers, and clubs.'
                ]
            ],
            [
                'index' => 'cold',
                'name' => 'Cold',
                'descriptions' => [
                    'Cold damage is caused by extremely low temperatures.',
                    'It can slow down or freeze targets.'
                ]
            ],
            [
                'index' => 'fire',
                'name' => 'Fire',
                'descriptions' => [
                    'Fire damage is caused by intense heat and flames.',
                    'It can ignite targets and cause burning over time.'
                ]
            ],
            [
                'index' => 'force',
                'name' => 'Force',
                'descriptions' => [
                    'Force damage is an energy type that deals pure, magical force.',
                    'It is often used in spells and magical effects.'
                ]
            ],
            [
                'index' => 'lightning',
                'name' => 'Lightning',
                'descriptions' => [
                    'Lightning damage is caused by electrical energy.',
                    'It can strike targets with intense electrical discharges.'
                ]
            ],
            [
                'index' => 'necrotic',
                'name' => 'Necrotic',
                'descriptions' => [
                    'Necrotic damage is associated with death and decay.',
                    'It can drain life force and damage living creatures.'
                ]
            ],
            [
                'index' => 'piercing',
                'name' => 'Piercing',
                'descriptions' => [
                    'Piercing damage is caused by sharp, pointed weapons.',
                    'It is often dealt by weapons such as daggers and spears.'
                ]
            ],
            [
                'index' => 'poison',
                'name' => 'Poison',
                'descriptions' => [
                    'Poison damage is caused by toxic substances.',
                    'It can lead to sickness and harm over time.'
                ]
            ],
            [
                'index' => 'psychic',
                'name' => 'Psychic',
                'descriptions' => [
                    'Psychic damage affects the mind and mental state.',
                    'It can cause confusion, fear, and mental anguish.'
                ]
            ],
            [
                'index' => 'radiant',
                'name' => 'Radiant',
                'descriptions' => [
                    'Radiant damage is associated with divine light and energy.',
                    'It often comes from celestial sources or holy magic.'
                ]
            ],
            [
                'index' => 'slashing',
                'name' => 'Slashing',
                'descriptions' => [
                    'Slashing damage is caused by sharp edges cutting through flesh.',
                    'It is dealt by weapons like swords and axes.'
                ]
            ],
            [
                'index' => 'thunder',
                'name' => 'Thunder',
                'descriptions' => [
                    'Thunder damage is caused by sound waves and pressure.',
                    'It can be deafening and disorienting.'
                ]
            ]
        ];

        // Inserisci i dati nella tabella
        foreach ($damageTypes as $damageType) {
            DB::table('damage_types')->updateOrInsert(
                ['index' => $damageType['index']],
                [
                    'name' => $damageType['name'],
                    'descriptions' => json_encode($damageType['descriptions'])
                ]
            );
        }
    }
}
