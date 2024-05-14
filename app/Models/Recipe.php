<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipes';

    protected $fillable = ['name', 'prep_time', 'cooking_instructions', 'difficulty', 'cuisine'];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'recipe_ingredients', 'recipe_id', 'ingredient_id')
            ->withPivot('quantity');
    }

    public function nutritionalInformation()
    {
        return $this->hasOne(NutritionalInformation::class);
    }

    public function favorites()
    {
        return $this->hasMany(CustomerFavorite::class);
    }

    public function equipmentNeeded()
    {
        return $this->hasMany(EquipmentNeeded::class);
    }
}
