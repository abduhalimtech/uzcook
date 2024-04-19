<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'customer_id';
    protected $table = 'customers';

    protected $fillable = ['username', 'telegram_id'];

    public function preferences()
    {
        return $this->hasMany(CustomerPreference::class, 'customer_id');
    }

    public function allergies()
    {
        return $this->hasMany(CustomerAllergy::class, 'customer_id');
    }

    public function favorites()
    {
        return $this->hasMany(CustomerFavorite::class, 'customer_id');
    }
}

