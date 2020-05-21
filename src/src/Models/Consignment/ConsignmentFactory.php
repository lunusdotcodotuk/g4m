<?php declare(strict_types=1);

namespace G4M\Models\Consignment;

use G4M\Models\Consignment\Number\RoyalMail;
use G4M\Models\Courier;

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
    public static function create(string $address, string $type) : Consignment
    {
        switch ($type) {
            case Courier::ROYAL_MAIL:
                return new Consignment(self::createRoyalMailNumber(), $address, $type);
        }

    }

    protected static function createRoyalMailNumber(): string
    {
        $number = new RoyalMail();
        return $number->generate();
    }
}
