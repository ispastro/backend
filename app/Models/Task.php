<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    protected $fillable = ['title', 'completed']; // Fillable attributes for mass assignment
    protected $casts = [
        'completed' => 'boolean', // Cast 'completed' attribute to boolean
    ];
}
