<?php
namespace HumanAnalytics\Core;

class Utils
{
    /**
     * Read JSON payload safely
     */
    public static function getJsonInput(): array
    {
        $raw = file_get_contents('php://input');
        $data = json_decode($raw, true);

        return is_array($data) ? $data : [];
    }

    /**
     * Send JSON response and exit
     */
    public static function jsonResponse(array $data = [], int $status = 200): void
    {
        http_response_code($status);
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }

    /**
     * Hash a value with salt (irreversible)
     */
    public static function hash(string $value, string $salt): string
    {
        return hash('sha256', $value . $salt);
    }

    /**
     * Safe server value getter
     */
    public static function server(string $key, $default = null)
    {
        return $_SERVER[$key] ?? $default;
    }
}
