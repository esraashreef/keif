<?php

namespace App\Policies;
use App\Models\questions;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class QuestionPolicy
{
    use HandlesAuthorization;

    
    public function delete(User $user , question $question)
    {
        return $user->id === $question->user_id;
    }

   
}
