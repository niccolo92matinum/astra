<?php

namespace App\Policies;

use App\Models\User;
use App\Nova\Category;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    


    public function viewAny(User $user)
    {
        return $user->isAdmin();
    }

}
