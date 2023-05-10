<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Abonent;
use App\Models\Call;
use App\Policies\AbonentPolicy;
use App\Policies\CallPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Call::class=>CallPolicy::class,
        Abonent::class=>AbonentPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
