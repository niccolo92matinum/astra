<?php

namespace App\Policies;

use App\Models\User;

use App\Models\Mastercategory;
use Illuminate\Auth\Access\HandlesAuthorization;

class MastercategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function viewAny(User $user)
    {
        return $user->isAdmin();
    }



    public function view(User $user, Mastercategory $mastercategory)
    {
        return $user->isAdmin();  
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Mastercategory  $article
     * @return mixed
     */
    public function update(User $user, Mastercategory $mastercategory)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Mastercategory  $article
     * @return mixed
     */
    public function delete(User $user,Mastercategory $mastercategory)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Mastercategory  $article
     * @return mixed
     */
    public function restore(User $user, Mastercategory $mastercategory)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Mastercategory  $article
     * @return mixed
     */
    public function forceDelete(User $user, Mastercategory $mastercategory)
    {
        return $user->isAdmin();
    }
}
