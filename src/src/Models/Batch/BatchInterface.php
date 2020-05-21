<?php

namespace G4M\Models\Batch;

use G4M\Models\Consignment\Consignment;

/** Interface to force implementations to adhere to these function names */
interface BatchInterface
{
    public function start();

    public function addConsignment(Consignment $consignment);

    public function end();
}
