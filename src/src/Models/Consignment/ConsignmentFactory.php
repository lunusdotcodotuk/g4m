<?php declare(strict_types=1);

namespace G4M\Models\Consignment;

/**
 * Factory class to produce a generic consignment with a specific number generator based on courier type
 * Allows the client to choose a courier type based on those available in the library
 */
class ConsignmentFactory
{
    /**
     * @param string $address
     * @param string $type
     * @return Consignment
     */
    public static function create(string $address, string $type)
    {
        return new Consignment('test', $address, $type);
    }
}
