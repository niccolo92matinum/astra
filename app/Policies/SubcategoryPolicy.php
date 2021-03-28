<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Subcategory;
use Illuminate\Auth\Access\HandlesAuthorization;

class SubcategoryPolicy
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

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Subcategory $article
     * @return mixed
     */
    public function view(User $user, Subcategory $subcategory)
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
     * @param  \App\Models\,Subcategory  $article
     * @return mixed
     */
    public function update(User $user,Subcategory $subcategory)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\,Subcategory  $article
     * @return mixed
     */
    public function delete(User $user,Subcategory $subcategory)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\,Subcategory $article
     * @return mixed
     */
    public function restore(User $user, Subcategory $subcategory)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\,Subcategory  $article
     * @return mixed
     */
    public function forceDelete(User $user,Subcategory $subcategory)
    {
        return $user->isAdmin();
    }
}
