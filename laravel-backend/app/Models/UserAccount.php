<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        // Add other fields as needed
    ];

    // Define relationships or methods here
}
