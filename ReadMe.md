# Laravel Query Optimizer

A Laravel 11 package for logging slow queries and optimizing database performance.

## Features

- **Log Slow Queries**: Logs slow database queries to the database.
- **Paginated Log Viewer**: View slow queries with pagination.
- **Configurable**: Allows configuration of slow query thresholds and route name.
- **Migration Publishing**: Publishes migration files for easy integration with your application.

## Installation

### 1. **Install the Package**

Run the following Composer command to install the package:

```sh
composer require therencemanzo/slowquerylogger
```

### 2. **Publish the config**
```sh
php artisan vendor:publish --provider="TherenceManzo\SlowQueryLogger\SlowQueryLoggerServiceProvider" --tag=config
```

### 3. **Publish the migration**

```sh
php artisan vendor:publish --provider="TherenceManzo\SlowQueryLogger\SlowQueryLoggerServiceProvider" --tag=migrations
```

### 4. **Run the migration**

```sh
php artisan migrate
```
### 5. **Configure your .env**

```sh
APP_DEBUG=true
```
For security it will disable the routing and viewing if set debug set to false but it will still log and save the slow queries in the background.

## Test 

Go to web browser and <APP_URL>/slow-queries you can configure the route and threshold in the config(slowquerlogger) file