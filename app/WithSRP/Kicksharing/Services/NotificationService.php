<?php


namespace App\WithSRP\Kicksharing\Services;

/**
 * Класс для всяких там отправок сообщений и тд и тп
 *
 * Class NotificationService
 * @package App\WithSRP\Kicksharing\Services
 */
class NotificationService
{
    /**
     * @param string $message
     */
    public function sendMessage(string $message) : void
    {
        echo date("Y-m-d h:i").": {$message}".PHP_EOL;
    }
}