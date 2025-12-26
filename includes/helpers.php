<?php
/**
 * Shared helper functions
 */

function config(string $key, $default = null)
{
    static $config;

    if ($config === null) {
        $config = require __DIR__ . '/../config/config.php';
    }

    return $config[$key] ?? $default;
}

function redirect(string $path): void
{
    header('Location: ' . $path);
    exit;
}

function is_post(): bool
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
