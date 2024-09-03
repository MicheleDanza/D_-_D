<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DamageType extends Model
{
    use HasFactory;
    protected $fillable = ['index', 'name', 'descriptions'];

    protected $casts = [
        'descriptions' => 'array',
    ];
}