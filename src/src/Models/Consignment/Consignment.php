<?php declare(strict_types=1);

namespace G4M\Models\Consignment;

class Consignment
{
    private string $number;

    private string $address;

    private string $type;

    public function __construct(string $number, string $address, string $type)
    {
        $this->number = $number;
        $this->address = $address;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }


}
