<?php


namespace App\WithSRP\Kicksharing\Services;

use App\WithSRP\Kicksharing\ElectricScooter;

/**
 * Пусть это будет классом, в котором будут хранится самокаты-самокатики
 * Конечно, этот класс зависит от класса ElectricScooter, но тем не менее
 *
 * Class ScootersParkServices
 * @package App\WithSRP\Kicksharing\Services
 */
class ScootersParkService
{
    /**
     * Предположим, что все электросамокаты берутся из базы данных, просто для простоты примера
     * я написал вот этот массив
     *
     * @var array|array[]
     */
    protected array $scootersNames = [
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
     * @var array
     */
    protected array $scooters;

    public function __construct()
    {
        foreach ($this->scootersNames as $scooter) {
            $this->scooters[] = new ElectricScooter($scooter["id"], $scooter["name"], $scooter["coords"]);
        }
    }

    /**
     * @return array
     */
    public function getScooters() : array
    {
        return $this->scooters;
    }
}