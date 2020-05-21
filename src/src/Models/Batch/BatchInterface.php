<?php

namespace G4M\Models\Batch;

use G4M\Models\Consignment\Consignment;

interface BatchInterface
{
    public function start();

    public function addConsignment(Consignment $consignment);

    public function end();
}
