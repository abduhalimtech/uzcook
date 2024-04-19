<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAllergy extends Model
{
    use HasFactory;
    protected $table = 'customer_allergies';
    protected $fillable = ['customer_id', 'allergen_id'];


    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function allergen()
    {
        return $this->belongsTo(Allergen::class, 'allergen_id');
    }
}
