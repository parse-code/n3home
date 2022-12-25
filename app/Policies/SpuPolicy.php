<?php

namespace App\Policies;

use App\Models\Spu;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SpuPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Spu $spu)
    {
        return $spu->company_id === $user->company_id;
    }
}
