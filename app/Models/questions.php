<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'question_context',
        'categories'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
        
    }

    public function ownedby(User $user)
    {
        return $user->id === $this->user_id;
        
    }

    public function answers()
    {
        return $this->hasMany(Answer::class); 
    }
}

