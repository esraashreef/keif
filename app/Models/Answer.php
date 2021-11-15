<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $fillable = [
        'body',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
       
    }
    public function answeredby(User $user)
    {
        return $user->id === $this->user_id;
        
    }
    public function question()
       
    { 
        return $this->belongsTo(questions::class);
    }


}
