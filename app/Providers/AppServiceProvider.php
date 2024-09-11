<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Schema::defaultStringLength(125);
        Gate::define('create, edit, delete', function (User $user){
            return $user->admin == 1; 
        });
    }
}
