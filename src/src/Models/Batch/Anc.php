<?php

namespace G4M\Models\Batch;

use Exception;
use G4M\Models\Consignment\Consignment;
use G4M\Models\Courier;

class Anc extends Batch implements BatchInterface
{
    /**
     * @param Consignment $consignment
     * @throws Exception
     */
    public function addConsignment(Consignment $consignment)
    {
        if ($consignment->getType() === Courier::ANC) {
            $this->consignments[] = $consignment;
        } else {
            throw new Exception('Consignment of wrong type');
        }
    }

    /** @returns string */
    public function end()
    {
        if (count($this->consignments) > 0) {
            //send to EMAIL
            return "EMAIL";
        } else {
            return "NONE TO SEND";
        }
    }
}
