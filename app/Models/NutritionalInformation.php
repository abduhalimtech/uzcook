<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionalInformation extends Model
{
    use HasFactory;

    protected $table = 'nutritional_information';
    protected $fillable = ['recipe_id', 'calories', 'protein', 'carbohydrates', 'fats', 'fiber', 'sugar'];


    public function recipe()
    {
        return $this->belongsTo(Recipe::class, 'recipe_id');
    }
}
