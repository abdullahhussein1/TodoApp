<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'theme',
        'sort_by',
        'user_id',
        // Add other fields as needed
    ];

    // Define relationships or methods here

    // Define the relationship to UserAccount
    public function user()
    {
        return $this->belongsTo(UserAccount::class, 'user_id');
    }
}
