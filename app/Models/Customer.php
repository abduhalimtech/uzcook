<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'telegram_id'];

    public function preferences()
    {
        return $this->hasMany(CustomerPreference::class);
    }

    public function allergies()
    {
        return $this->hasMany(CustomerAllergy::class);
    }

    public function favorites()
    {
        return $this->hasMany(CustomerFavorite::class);
    }
}

