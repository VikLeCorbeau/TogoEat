<?php

namespace App\Models;

use App\Models\Meal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'status',
        'price',
        'current_order',
    ];

    /**
     * 
     * Ensure Many to Many relation with Meals table
     *
     * @return ?
     */

    public function meals()
    {
        return $this->belongsToMany(Meal::class);
    }
}
