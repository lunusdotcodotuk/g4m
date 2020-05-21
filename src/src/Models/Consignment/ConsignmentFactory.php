<?php declare(strict_types=1);

namespace G4M\Models\Consignment;

use Exception;
use G4M\Models\Consignment\Number\Anc;
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
     * @throws Exception
     */
    public static function create(string $address, string $type) : Consignment
    {
        switch ($type) {
            case Courier::ROYAL_MAIL:
                return new Consignment(self::createRoyalMailNumber(), $address, $type);
                break;
            case Courier::ANC:
                return new Consignment(self::createAncNumber(), $address, $type);
            default:
                throw new Exception('No Consignment Type Set!');
        }

    }

    protected static function createRoyalMailNumber(): string
    {
        $number = new RoyalMail();
        return $number->generate();
    }

    protected static function createAncNumber(): string
    {
        $number = new Anc();
        return $number->generate();
    }
}
