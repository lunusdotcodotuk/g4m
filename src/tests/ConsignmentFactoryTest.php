<?php declare(strict_types=1);

use G4M\Models\Consignment\Number\RoyalMail;
use PHPUnit\Framework\TestCase;
use G4M\Models\Consignment\ConsignmentFactory;
use G4M\Models\Courier;

final class ConsignmentFactoryTest extends TestCase
{
    public function testFactoryCreatesANewRoyalMailConsignment(): void
    {
        $consignment = ConsignmentFactory::create('TT1 1TT', Courier::ROYAL_MAIL);
        $this->assertMatchesRegularExpression(
            RoyalMail::PATTERN,
            $consignment->getNumber()
        );
        $this->assertEquals(
            'TT1 1TT',
            $consignment->getAddress()
        );
        $this->assertEquals(
            Courier::ROYAL_MAIL,
            $consignment->getType()
        );
    }
}
