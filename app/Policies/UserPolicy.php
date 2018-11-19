<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
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

    //修改策略
    public function update(User $currentUser,User $user)
    {
        return $currentUser->id == $user->id;
    }

    //删除策略
    public function destroy(User $currenUser,User $user)
    {
        return $currenUser->is_admin && $currenUser->id !== $user->id;
    }
}
