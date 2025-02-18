<?php

use Illuminate\Support\Facades\Route;
use QueryOptimizer\Models\QueryLog;
use TherenceManzo\SlowQueryLogger\Models\SlowQuery;

Route::get(config('slowquerylogger.route', 'slow-queries'), function () {

    return view('slowqueries::slowQueries', [
            'slowQueries' =>  SlowQuery::orderBy('created_at', 'desc')->paginate(10)
    ]);
});
