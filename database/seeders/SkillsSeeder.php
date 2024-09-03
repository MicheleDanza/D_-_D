<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Dati per tutte le abilità
       // Ottieni gli ID degli ability scores
       $abilityScores = DB::table('ability_scores')->pluck('id', 'index');

       // Dati per tutte le abilità
       $skills = [
           [
               'index' => 'acrobatics',
               'name' => 'ACR',
               'full_name' => 'Acrobatics',
               'desc' => json_encode([
                   'general' => 'Acrobatics is used to perform feats of agility and balance. It includes tasks like tumbling, jumping, or maintaining balance on a narrow surface.',
                   'examples' => 'A typical Acrobatics check might involve jumping across a gap, walking along a tightrope, or performing a somersault.'
               ]),
               'ability_score_id' => $abilityScores['dex']
           ],
           [
               'index' => 'animal_handling',
               'name' => 'ANH',
               'full_name' => 'Animal Handling',
               'desc' => json_encode([
                   'general' => 'Animal Handling involves interacting with animals in a way that gains their trust or controls their behavior.',
                   'examples' => 'A typical Animal Handling check might involve calming a frightened horse, training a pet, or steering a herd of cattle.'
               ]),
               'ability_score_id' => $abilityScores['wis']
           ],
           [
               'index' => 'arcana',
               'name' => 'ARC',
               'full_name' => 'Arcana',
               'desc' => json_encode([
                   'general' => 'Arcana represents knowledge of magic, magical lore, and the arcane arts.',
                   'examples' => 'A typical Arcana check might involve identifying a magical artifact, recalling lore about spellcasting, or understanding an ancient magical script.'
               ]),
               'ability_score_id' => $abilityScores['int']
           ],
           [
               'index' => 'athletics',
               'name' => 'ATH',
               'full_name' => 'Athletics',
               'desc' => json_encode([
                   'general' => 'Athletics covers physical strength and endurance, including tasks such as climbing, swimming, or jumping.',
                   'examples' => 'A typical Athletics check might involve climbing a wall, swimming across a river, or lifting a heavy object.'
               ]),
               'ability_score_id' => $abilityScores['str']
           ],
           [
               'index' => 'deception',
               'name' => 'DEC',
               'full_name' => 'Deception',
               'desc' => json_encode([
                   'general' => 'Deception involves misleading or lying to others, convincing them of false information.',
                   'examples' => 'A typical Deception check might involve convincing someone you are someone else, lying about your intentions, or fabricating a story.'
               ]),
               'ability_score_id' => $abilityScores['cha']
           ],
           [
               'index' => 'history',
               'name' => 'HIS',
               'full_name' => 'History',
               'desc' => json_encode([
                   'general' => 'History represents knowledge about past events, cultures, and historical figures.',
                   'examples' => 'A typical History check might involve recalling a significant historical event, identifying the origin of an artifact, or understanding ancient customs.'
               ]),
               'ability_score_id' => $abilityScores['int']
           ],
           [
               'index' => 'insight',
               'name' => 'INS',
               'full_name' => 'Insight',
               'desc' => json_encode([
                   'general' => 'Insight involves understanding and interpreting the emotions and intentions of others.',
                   'examples' => 'A typical Insight check might involve reading someone’s body language, determining if someone is lying, or sensing the true nature of a situation.'
               ]),
               'ability_score_id' => $abilityScores['wis']
           ],
           [
               'index' => 'intimidation',
               'name' => 'INT',
               'full_name' => 'Intimidation',
               'desc' => json_encode([
                   'general' => 'Intimidation involves using threats, coercion, or a commanding presence to influence others.',
                   'examples' => 'A typical Intimidation check might involve frightening an opponent into submission, threatening someone to get information, or scaring off a hostile creature.'
               ]),
               'ability_score_id' => $abilityScores['cha']
           ],
           [
               'index' => 'investigation',
               'name' => 'INV',
               'full_name' => 'Investigation',
               'desc' => json_encode([
                   'general' => 'Investigation involves searching for clues, analyzing evidence, and solving mysteries.',
                   'examples' => 'A typical Investigation check might involve examining a crime scene, deciphering a code, or uncovering hidden details.'
               ]),
               'ability_score_id' => $abilityScores['int']
           ],
           [
               'index' => 'medicine',
               'name' => 'MED',
               'full_name' => 'Medicine',
               'desc' => json_encode([
                   'general' => 'Medicine involves diagnosing and treating illnesses and injuries.',
                   'examples' => 'A typical Medicine check might involve stabilizing a dying creature, diagnosing a disease, or identifying symptoms.'
               ]),
               'ability_score_id' => $abilityScores['wis']
           ],
           [
               'index' => 'nature',
               'name' => 'NAT',
               'full_name' => 'Nature',
               'desc' => json_encode([
                   'general' => 'Nature represents knowledge about the natural world, including flora, fauna, and weather.',
                   'examples' => 'A typical Nature check might involve identifying a plant or animal, predicting the weather, or understanding a natural phenomenon.'
               ]),
               'ability_score_id' => $abilityScores['int']
           ],
           [
               'index' => 'perception',
               'name' => 'PER',
               'full_name' => 'Perception',
               'desc' => json_encode([
                   'general' => 'Perception involves noticing and observing details about your surroundings.',
                   'examples' => 'A typical Perception check might involve spotting a hidden creature, noticing a trap, or detecting a faint sound.'
               ]),
               'ability_score_id' => $abilityScores['wis']
           ],
           [
               'index' => 'performance',
               'name' => 'PERF',
               'full_name' => 'Performance',
               'desc' => json_encode([
                   'general' => 'Performance involves using artistic skills to entertain or impress others.',
                   'examples' => 'A typical Performance check might involve singing, dancing, or acting in front of an audience.'
               ]),
               'ability_score_id' => $abilityScores['cha']
           ],
           [
               'index' => 'persuasion',
               'name' => 'PER',
               'full_name' => 'Persuasion',
               'desc' => json_encode([
                   'general' => 'Persuasion involves convincing others to agree with your point of view or follow your suggestions.',
                   'examples' => 'A typical Persuasion check might involve negotiating a deal, convincing someone to help you, or influencing a group decision.'
               ]),
               'ability_score_id' => $abilityScores['cha']
           ],
           [
               'index' => 'religion',
               'name' => 'REL',
               'full_name' => 'Religion',
               'desc' => json_encode([
                   'general' => 'Religion represents knowledge about deities, religious practices, and sacred lore.',
                   'examples' => 'A typical Religion check might involve identifying a holy symbol, recalling religious rites, or understanding the beliefs of a faith.'
               ]),
               'ability_score_id' => $abilityScores['int']
           ],
           [
               'index' => 'sleight_of_hand',
               'name' => 'SLH',
               'full_name' => 'Sleight of Hand',
               'desc' => json_encode([
                   'general' => 'Sleight of Hand involves performing tasks with skillful dexterity, such as manipulating objects secretly or performing minor tricks.',
                   'examples' => 'A typical Sleight of Hand check might involve palming an object, picking a pocket, or performing a magical sleight of hand trick.'
               ]),
               'ability_score_id' => $abilityScores['dex']
           ],
           [
               'index' => 'stealth',
               'name' => 'STE',
               'full_name' => 'Stealth',
               'desc' => json_encode([
                   'general' => 'Stealth involves moving quietly and avoiding detection.',
                   'examples' => 'A typical Stealth check might involve sneaking past a guard, hiding in shadows, or moving silently through a room.'
               ]),
               'ability_score_id' => $abilityScores['dex']
           ],
           [
               'index' => 'survival',
               'name' => 'SUR',
               'full_name' => 'Survival',
               'desc' => json_encode([
                   'general' => 'Survival involves tracking creatures, foraging for food, and navigating in the wilderness.',
                   'examples' => 'A typical Survival check might involve finding food and water, tracking a creature through the forest, or navigating through a dangerous terrain.'
               ]),
               'ability_score_id' => $abilityScores['wis']
           ],
       ];

       // Inserisci i dati nella tabella
       foreach ($skills as $skill) {
           DB::table('skills')->updateOrInsert(
               ['index' => $skill['index']],
               [
                   'name' => $skill['name'],
                   'full_name' => $skill['full_name'],
                   'desc' => $skill['desc'],
                   'ability_score_id' => $skill['ability_score_id']
               ]
           );
       }

    }
}