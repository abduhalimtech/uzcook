<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerFavorite extends Model
{
    use HasFactory;

    protected $table = 'customer_favorites';
    protected $fillable = ['customer_id', 'recipe_id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
