<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPreference extends Model
{
    use HasFactory;

    protected $table = 'customer_preferences';
    protected $fillable = ['customer_id', 'preference_type', 'preference_value'];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
