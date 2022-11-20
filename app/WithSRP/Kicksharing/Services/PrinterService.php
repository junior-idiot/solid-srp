<?php


namespace App\WithSRP\Kicksharing\Services;

use App\WithSRP\Kicksharing\Order;

/**
 * Класс для вывода всякой информации
 *
 * Class PrinterService
 * @package App\WithSRP\Kicksharing
 */
class PrinterService
{
    /**
     * @param Order $order
     * @return string
     */
    public function printOrder(Order $order) : string
    {
        return $order->getClient()." Арендовал электросамокат ".$order->getScooter()->getName().PHP_EOL;
    }
}