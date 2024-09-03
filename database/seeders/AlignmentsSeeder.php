<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AlignmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alignments = [
            [
                'index' => 'lawful_good',
                'name' => 'Lawful Good',
                'description' => 'Lawful good characters are typically motivated by a desire to help others and uphold justice while strictly following laws and rules.'
            ],
            [
                'index' => 'neutral_good',
                'name' => 'Neutral Good',
                'description' => 'Neutral good characters are guided by their conscience and aim to do the best they can for others, without regard for or against law and order.'
            ],
            [
                'index' => 'chaotic_good',
                'name' => 'Chaotic Good',
                'description' => 'Chaotic good characters act according to their conscience, but they do not feel bound by laws or rules, preferring to follow their own moral compass.'
            ],
            [
                'index' => 'lawful_neutral',
                'name' => 'Lawful Neutral',
                'description' => 'Lawful neutral characters believe in the rule of law and order, and they act according to a set code or set of principles, without regard for the greater good.'
            ],
            [
                'index' => 'true_neutral',
                'name' => 'True Neutral',
                'description' => 'True neutral characters act in a balanced manner, without strongly favoring law or chaos, good or evil. They seek to maintain equilibrium and balance.'
            ],
            [
                'index' => 'chaotic_neutral',
                'name' => 'Chaotic Neutral',
                'description' => 'Chaotic neutral characters value their own freedom and the freedom of others above all else, acting according to their whims and desires, without regard for law or order.'
            ],
            [
                'index' => 'lawful_evil',
                'name' => 'Lawful Evil',
                'description' => 'Lawful evil characters use law and order to further their own selfish desires and goals. They believe in using rules and structure to their advantage.'
            ],
            [
                'index' => 'neutral_evil',
                'name' => 'Neutral Evil',
                'description' => 'Neutral evil characters are primarily motivated by their own self-interest and have no qualms about using others to achieve their goals, regardless of the consequences.'
            ],
            [
                'index' => 'chaotic_evil',
                'name' => 'Chaotic Evil',
                'description' => 'Chaotic evil characters act according to their own impulses, with no regard for rules, laws, or the well-being of others. They thrive on chaos and destruction.'
            ],
        ];

        // Inserisci i dati nella tabella
        foreach ($alignments as $alignment) {
            DB::table('alignments')->updateOrInsert(
                ['index' => $alignment['index']],
                [
                    'name' => $alignment['name'],
                    'description' => $alignment['description']
                ]
            );
        }
    }
}
