<?php

namespace TherenceManzo\SlowQueryLogger;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\DB;
use TherenceManzo\SlowQueryLogger\Models\SlowQuery;

class SlowQueryLoggerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        // Publish Config
        $this->publishes([
            __DIR__ . '/config/slowquerylogger.php' => config_path('slowquerylogger.php'),
        ], 'config');
        
        // Publish Migrations
        $this->publishes([
            __DIR__ . '/database/migrations' => database_path('migrations'),
        ], 'migrations');

        $threshold = config('slowquerylogger.threshold', 200); // Default threshold is 200 milliseconds
        
        
        DB::listen(function (QueryExecuted $query) use ($threshold) {
        
            if ($query->time > $threshold) {
                SlowQuery::create([
                    'query' => $query->sql,
                    'execution_time' => $query->time,
                    'bindings' => json_encode($query->bindings),
                ]);
            }
        });

        if(app()->hasDebugModeEnabled())
        {
            // Load Views
            $this->loadViewsFrom(__DIR__ . '/Views', 'slowqueries');

            // Load Routes
            $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');
        }

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/slowquerylogger.php', 'slowquerylogger');
    }
}