<?php
namespace HumanAnalytics\Core;

class Logger
{
    protected string $path;
    protected string $salt;

    public function __construct(string $path, string $salt)
    {
        $this->path = $path;
        $this->salt = $salt;
    }

    /**
     * Log a verified human visit
     */
    public function logHuman(int $score): void
    {
        $ip = Utils::server('REMOTE_ADDR', '0.0.0.0');

        $entry = [
            'timestamp' => date('c'),
            'score'     => $score,
            'ip_hash'   => Utils::hash($ip, $this->salt),
        ];

        file_put_contents(
            $this->path,
            json_encode($entry, JSON_UNESCAPED_SLASHES) . PHP_EOL,
            FILE_APPEND | LOCK_EX
        );
    }
}
