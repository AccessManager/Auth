<?php

namespace AccessManager\Auth\Providers;


use AccessManager\Auth\Commands\ResetAdminPasswordCommand;
use Illuminate\Support\ServiceProvider;

/**
 * Class AuthServiceProvider
 * @package AccessManager\Auth
 */
class AuthServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $commands = [
        ResetAdminPasswordCommand::class,
    ];


    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../Views', 'Auth');
        $this->loadMigrationsFrom( __DIR__ . "/../Database/Migrations");

        $this->commands($this->commands);
    }
}