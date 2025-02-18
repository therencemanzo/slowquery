<?php

namespace TherenceManzo\SlowQueryLogger\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlowQuery extends Model
{
    use HasFactory;

    protected $table = 'slow_queries';

    protected $fillable = [
        'query',
        'execution_time',
        'bindings',
    ];
}
