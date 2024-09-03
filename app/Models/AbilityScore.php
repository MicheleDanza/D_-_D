<?php

namespace App\Models;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AbilityScore extends Model
{
    use HasFactory;
    
    protected $fillable = ['index', 'name', 'full_name', 'desc'];

    // Definisce la relazione uno a molti con il modello Skill
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
