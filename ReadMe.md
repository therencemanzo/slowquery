# Laravel Query Optimizer

A Laravel 11 package for logging slow queries and optimizing database performance.

## Features

- **Log Slow Queries**: Logs slow database queries to the database.
- **Paginated Log Viewer**: View slow queries with pagination.
- **Configurable**: Allows configuration of slow query thresholds and other settings.
- **Migration Publishing**: Publishes migration files for easy integration with your application.
- **Customizable Views**: Tailwind CSS-based views for the query log display.

## Installation

### 1. **Install the Package**

Run the following Composer command to install the package:

```sh
composer require yourusername/query-optimizer
```

### 2. **Publish the config**
```sh
php artisan vendor:publish --provider="TherenceManzo\SlowQueryLogger\SlowQueryLoggerServiceProvider" --tag=config
```

### 3. **Publish the migration**

```sh
php artisan vendor:publish --provider="TherenceManzo\SlowQueryLogger\SlowQueryLoggerServiceProvider" --tag=migrations
```

### 3. **Run the migration**

```sh
php artisan migrate
```

### 4. **Test**

Go to web browser and <APP_URL>/slow-queries you can configure the route and threshold in the config(slowquerlogger) file