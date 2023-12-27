<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'note',
        'completed',
        'pinned',
        'remind_date',
        // Add other fields as needed
    ];

    protected $casts = [
        'completed' => 'boolean',
        'pinned' => 'boolean',
        // Add other fields as needed
    ];

    // Additional relationships or methods can be added here
}
