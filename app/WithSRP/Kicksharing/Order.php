<?php


namespace App\WithSRP\Kicksharing;

/**
 * А этот класс работает с формированием заказа. Опять же, всё чисто утрированно!
 *
 * Class Order
 * @package App\WithSRP\Kicksharing
 */
class Order
{
    /**
     * @var ElectricScooter
     */
    protected ElectricScooter $scooter;

    /**
     * @var string
     */
    protected string $client;

    /**
     * Order constructor.
     * @param ElectricScooter $electricScooter
     * @param string $client
     */
    public function __construct(
        ElectricScooter $electricScooter,
        string $client,
    )
    {
        $this->scooter = $electricScooter;
        $this->client = $client;
    }

    /**
     * @return ElectricScooter
     */
    public function getScooter(): ElectricScooter
    {
        return $this->scooter;
    }

    /**
     * @return string
     */
    public function getClient(): string
    {
        return $this->client;
    }
}