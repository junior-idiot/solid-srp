<?php


namespace App\WithSRP\Kicksharing\Services;


use App\WithSRP\Kicksharing\ElectricScooter;

/**
 * Класс, который ответвенен за поиск чего-либо
 *
 * Class FindService
 * @package App\WithSRP\Kicksharing\Services
 */
class FindService
{
    /**
     * метод для поиска самоката
     *
     * @param int $id
     * @return ?ElectricScooter
     */
    public function findScooter(int $id) : ?ElectricScooter
    {
        $scootersPark = new ScootersParkService();
        $scooters = $scootersPark->getScooters();

        foreach ($scooters as $scooter) {
            if ($scooter->getId() == $id) return $scooter;
        }

        return null;
    }
}