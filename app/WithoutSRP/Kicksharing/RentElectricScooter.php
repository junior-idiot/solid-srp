<?php


namespace App\WithoutSRP\Kicksharing;

/**
 * Класс для аренды электросамоката
 *
 * Class RentElectricScooter
 * @package App\WithoutSRP\Kicksharing
 */
class RentElectricScooter
{
    /**
     * @var array|array[]
     */
    protected array $scooters = [
        [
            "id" => 1,
            "name" => "Xiaomi m365",
            "coords" => [-12.1212, -13.12121]
        ],
        [
            "id" => 2,
            "name" => "Kugoo M4 pro",
            "coords" => [-12.1212, -13.12121]
        ],
    ];

    /**
     * @return array
     */
    public function getScooters() : array
    {
        $scooters = [];

        foreach ($this->scooters as $scooter) {
            $scooters[] = new ElectricScooter($scooter["id"], $scooter["name"], $scooter["coords"]);
        }

        return $scooters;
    }

    /**
     * метод для поиска самоката
     *
     * @param int $id
     * @return ?ElectricScooter
     */
    public function findScooter(int $id) : ?ElectricScooter
    {
        $scooters = $this->getScooters();

        foreach ($scooters as $scooter) {
            if ($scooter->getId() == $id) return $scooter;
        }

        return null;
    }

    /**
     * @param ElectricScooter $electricScooter
     * @param string $clientName
     * @return Order
     */
    public function orderScooter(ElectricScooter $electricScooter, string $clientName) : Order
    {
        return new Order($electricScooter, $clientName);
    }

    /**
     * @param Order $order
     * @return string
     */
    public function printOrder(Order $order) : string
    {
        return $order->getClient()." Арендовал электросамокат ".$order->getScooter()->getName().PHP_EOL;
    }
}