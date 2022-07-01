<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Blade::if('role', function($id_role){
        //     return ( Auth::user()->roles()->where('role_id', $id_role)->exists() );
        // });

        Blade::if('role', function($arr_roles) {
            if (Auth::user()) {
                foreach ($arr_roles as $role) {
                    if (Auth::user()->roles()->where('role_id', $role)->exists()) {
                        return true;
                    }
                }
            } else {
                return false;
            }

        });
    }
}
