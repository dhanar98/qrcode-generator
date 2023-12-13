<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Str;

class UserObserver
{
    public function creating(User $user): void
    {
        // Generate UUIDs for api_key and api_password columns
        $user->app_code = Str::random(7);
        $user->api_key = Str::uuid();
        $user->api_password = Str::uuid();
    }

    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        event(new Registered($user));
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }
}
