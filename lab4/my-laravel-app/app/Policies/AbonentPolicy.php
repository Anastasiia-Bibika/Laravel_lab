<?php

namespace App\Policies;

use App\Models\Abonent;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AbonentPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(?User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(?User $user, Abonent $abonent): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(?User $user): bool
    {
        if($user === null)
        {
            return false;
        }
        if($user->role == "superadmin")
        {
            return true;
        }
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Abonent $abonent): bool
    {
        if($user->id == $abonent->creator_user_id)
        {
            return true;
        }
        elseif ($user->role == "superadmin" or $user->role == "editor")
        {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Abonent $abonent): bool
    {
        if($user->id == $abonent->creator_user_id)
        {
            return true;
        }
        if ($user->role == "superadmin")
        {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(?User $user, Abonent $abonent): bool
    {
        if ($user->role == "superadmin")
        {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Abonent $abonent): bool
    {
        if ($user->role == "superadmin")
        {
            return true;
        }
        return false;
    }
}
