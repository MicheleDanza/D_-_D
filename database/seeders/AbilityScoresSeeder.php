<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AbilityScoresSeeder extends Seeder
{
    public function run()
    {
        $abilityScores = [
            [
                'index' => 'cha',
                'name' => 'CHA',
                'full_name' => 'Charisma',
                'desc' => json_encode([
                    "Charisma measures your ability to interact effectively with others. It includes such factors as confidence and eloquence, and it can represent a charming or commanding personality.",
                    "A Charisma check might arise when you try to influence or entertain others, when you try to make an impression or tell a convincing lie, or when you are navigating a tricky social situation. The Deception, Intimidation, Performance, and Persuasion skills reflect aptitude in certain kinds of Charisma checks."
                ])
            ],
            [
                'index' => 'con',
                'name' => 'CON',
                'full_name' => 'Constitution',
                'desc' => json_encode([
                    "Constitution measures your health, stamina, and vital force. It determines how long you can keep going in strenuous situations and how well you resist effects that would drain your energy or vitality.",
                    "A Constitution check might arise when you need to hold your breath, endure physical hardship, or resist poison or disease."
                ])
            ],
            [
                'index' => 'dex',
                'name' => 'DEX',
                'full_name' => 'Dexterity',
                'desc' => json_encode([
                    "Dexterity measures your agility, reflexes, and balance. It represents your ability to move quickly and gracefully.",
                    "A Dexterity check might arise when you try to dodge out of the way, keep your balance on a narrow ledge, or pick a lock."
                ])
            ],
            [
                'index' => 'int',
                'name' => 'INT',
                'full_name' => 'Intelligence',
                'desc' => json_encode([
                    "Intelligence measures your ability to think critically and recall information. It covers your capacity for reasoning, problem-solving, and understanding complex concepts.",
                    "An Intelligence check might arise when you try to recall a piece of information, solve a puzzle, or understand a foreign language."
                ])
            ],
            [
                'index' => 'str',
                'name' => 'STR',
                'full_name' => 'Strength',
                'desc' => json_encode([
                    "Strength measures your physical power and ability to exert force. It covers your capability to lift, push, or pull heavy objects, and your physical prowess in combat.",
                    "A Strength check might arise when you try to break down a door, lift a heavy weight, or overpower an opponent in a wrestling match."
                ])
            ],
            [
                'index' => 'wis',
                'name' => 'WIS',
                'full_name' => 'Wisdom',
                'desc' => json_encode([
                    "Wisdom measures your perception, intuition, and insight. It reflects your ability to notice details, make sound judgments, and act with common sense.",
                    "A Wisdom check might arise when you try to spot a hidden threat, sense a creature’s intentions, or recall a piece of advice."
                ])
            ]
        ];

        // Inserisci i dati nella tabella
        foreach ($abilityScores as $score) {
            DB::table('ability_scores')->updateOrInsert(
                ['index' => $score['index']],
                [
                    'name' => $score['name'],
                    'full_name' => $score['full_name'],
                    'desc' => $score['desc']
                ]
            );
        }
        
    }
}