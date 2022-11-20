<?php


namespace App\WithSRP\Kicksharing;


//Класс, который будет отвечать за аренду электросамоката (кикшеринг - это как каршеринг, но с арендой электросамокатов)
//для простоты примеры будут максимально утрированными
class RentElectricScooter
{
    /**
     * @param ElectricScooter $electricScooter
     * @param string $clientName
     * @return Order
     */
    public function orderScooter(ElectricScooter $electricScooter, string $clientName) : Order
    {
        return new Order($electricScooter, $clientName);
    }
}