<?php

return [
    'threshold' => env('SLOW_QUERY_THRESHOLD', 200), // Log queries taking more than 200ms
    'route' => env('SLOW_QUERY_ROUTE', 'slow-queries'), // Route to view slow queries
];