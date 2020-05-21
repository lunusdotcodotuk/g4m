<?php declare(strict_types=1);

use G4M\Models\Batch\Anc;
use G4M\Models\Batch\RoyalMail;
use G4M\Models\Consignment\ConsignmentFactory;
use PHPUnit\Framework\TestCase;
use G4M\Models\Courier;

final class BatchTest extends TestCase
{
    public function testCreatesANewBatchForRoyalMail(): void
    {
        $batch = new RoyalMail();
        $batch->start();
        $number = 3;
        for($i = 0; $i < $number; $i++) {
            $consignment = ConsignmentFactory::create('TT1 1TT', Courier::ROYAL_MAIL);
            $batch->addConsignment($consignment);
        }

        $this->assertEquals(
            $number,
            $batch->getNumberOfConsignments()
        );

        $this->assertEquals(
            'FTP',
            $batch->end()
        );
    }

    public function testCreatesANewBatchForAnc(): void
    {
        $batch = new Anc();
        $batch->start();
        $number = 3;
        for($i = 0; $i < $number; $i++) {
            $consignment = ConsignmentFactory::create('TT1 1TT', Courier::ANC);
            $batch->addConsignment($consignment);
        }

        $this->assertEquals(
            $number,
            $batch->getNumberOfConsignments()
        );

        $this->assertEquals(
            'EMAIL',
            $batch->end()
        );
    }
}
