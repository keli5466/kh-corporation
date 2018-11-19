<?php

// Show errors in page
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Add Composer autoloader
require 'vendor/autoload.php';

// Load .env vars
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

// Enable Sentry
(new Raven_Client(getenv('SENTRY_DSN'), [
  'environment' => getenv('APP_ENV'),
]))->install();

// Add helpers
require 'vendor/larapack/dd/src/helper.php';
