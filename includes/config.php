<?php

/**
 * Application bootstrap: Composer autoload, .env, database helper, page defaults.
 * Set $pageTitle, $activeNav, and $pageScript before including head.php.
 */

$rootPath = dirname(__DIR__);

// Composer autoload (vlucas/phpdotenv)
$autoload = $rootPath . '/vendor/autoload.php';
if (!is_file($autoload)) {
    throw new RuntimeException(
        'Composer dependencies are missing. Run: composer install'
    );
}
require_once $autoload;

// Load environment variables from .env
if (is_file($rootPath . '/.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable($rootPath);
    $dotenv->load();
} else {
    // Allow running before .env exists; copy from .env.example
    Dotenv\Dotenv::createImmutable($rootPath)->safeLoad();
}

require_once __DIR__ . '/database.php';

// Page variables (override in each page before including head.php)
$pageTitle = $pageTitle ?? 'BookMyGaddi';
$activeNav = $activeNav ?? ''; // 'tours' | 'taxi'
$pageScript = $pageScript ?? null;
