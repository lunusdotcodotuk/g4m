<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use G4M\Models\Consignment\Consignment;
use G4M\Models\Courier;

final class ConsignmentTest extends TestCase
{
    public function testCreatesANewConsignment(): void
    {
        $consignment = new Consignment('test', 'TT1 1TT', Courier::ROYAL_MAIL);
        $this->assertEquals(
            'test',
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
