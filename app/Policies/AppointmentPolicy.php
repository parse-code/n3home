<?php

namespace App\Policies;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AppointmentPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Appointment $appointment)
    {
        return $appointment->user_id === $user->id;
    }
}
