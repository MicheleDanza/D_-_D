<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = ['index', 'name', 'full_name', 'desc', 'ability_score_id'];

    // Definisce la relazione molti a uno con il modello AbilityScore
    public function abilityScore()
    {
        return $this->belongsTo(AbilityScore::class);
    }
}
