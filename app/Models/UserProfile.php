<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'phone',
        'date_of_birth',
        'role',
        'school_name',
        'school_location',
        'grade_level',
        'curriculum',
        'learning_goals',
        'subject_preferences',
        'notifications_enabled',
        'timezone',
        'parent_email',
        'parent_phone',
    ];

    protected $casts = [
        'learning_goals' => 'array',
        'subject_preferences' => 'array',
        'notifications_enabled' => 'boolean',
        'date_of_birth' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
