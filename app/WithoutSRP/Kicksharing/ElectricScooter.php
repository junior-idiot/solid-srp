<?php


namespace App\WithoutSRP\Kicksharing;


/**
 * Класс для сущности "Электросамокат"
 *
 * Class ElectricScooter
 * @package App\WithSRP\Kicksharing
 */
class ElectricScooter
{
    /**
     * @var int
     */
    protected int $id;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var array
     */
    protected array $coords;

    /**
     * ElectricScooter constructor.
     * @param int $id
     * @param string $name
     * @param array $coords
     */
    public function __construct(
        int $id,
        string $name,
        array $coords,
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->coords = $coords;
    }

    /**
     * @return array
     */
    public function getCoords(): array
    {
        return $this->coords;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}