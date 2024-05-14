<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentNeeded extends Model
{
    use HasFactory;

    protected $table = 'equipment_needed';
    protected $fillable = ['recipe_id', 'equipment'];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
