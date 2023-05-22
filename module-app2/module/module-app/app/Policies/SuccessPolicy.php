<?php

namespace App\Policies;

use App\Models\Success;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class SuccessPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        if (
            $user !== null
        ) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Success $success): bool
    {
        if (
            $user !== null
        ) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Success $success): bool
    {
        if (
            $user->role == 'admin' or
            $user->role == 'editor'
        ) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Success $success): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Success $success): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Success $success): bool
    {
        return false;
    }
}
