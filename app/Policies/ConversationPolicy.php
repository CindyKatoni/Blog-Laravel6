<?php

namespace App\Policies;

use App\Conversation;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConversationPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }


    public function view(User $user, Conversation $conversation)
    {
        // return $conversation->user->is($user);
    }


    public function create(User $user)
    {
        //
    }


    public function update(User $user, Conversation $conversation)
    {
        return $conversation->user->is($user);
    }


    public function delete(User $user, Conversation $conversation)
    {
        //
    }


    public function restore(User $user, Conversation $conversation)
    {
        //
    }


    public function forceDelete(User $user, Conversation $conversation)
    {
        //
    }
}