<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Support\Facades\Blade;
use App\View\Components\AppLayout;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Schema::defaultStringLength(125);
        Gate::define('create, edit, delete', function (User $user){
            return $user->admin == 1; 
        });
        Blade::component('app-layout', AppLayout::class); // Certifique-se de que o caminho está correto
    }
    
}
