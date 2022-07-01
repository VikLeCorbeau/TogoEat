<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * 
     * Ensure Many to Many relation with Users table
     *
     * @return ?
     */
    public function users(){

        return $this->belongsToMany(User::class);
        
    }
}
