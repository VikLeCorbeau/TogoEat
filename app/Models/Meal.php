<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'available',
        'name',
        'type',
        'description',
        'price',
    ];

    /**
     * 
     * Ensure Many to Many relation with Orders table
     *
     * @return ?
     */

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}