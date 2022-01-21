<?php

namespace App\Policies;

use App\Models\User;
use App\Models\thumbnail;
use Illuminate\Auth\Access\HandlesAuthorization;

class ThumbnailPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\thumbnail  $thumbnail
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, thumbnail $thumbnail)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\thumbnail  $thumbnail
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, thumbnail $thumbnail)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\thumbnail  $thumbnail
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, thumbnail $thumbnail)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\thumbnail  $thumbnail
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, thumbnail $thumbnail)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\thumbnail  $thumbnail
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, thumbnail $thumbnail)
    {
        //
    }
}
