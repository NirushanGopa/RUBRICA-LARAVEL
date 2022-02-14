<?php
 
namespace App\Policies;
 
use App\Models\Contatto;
use App\Models\User;
 
class ContattoPolicy
{
    /**
     * Determine if the given post can be updated by the user.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Post  $post
     * @return bool
     */
    public function update(User $user, Contatto $contatto)
    {
        return $user->id === $contatto->iduser;
    }

    public function delete(User $user, Contatto $contatto)
    {
        return $user->id === $contatto->iduser;
    }
}