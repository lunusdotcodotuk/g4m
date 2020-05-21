<?php

namespace G4M\Models\Batch;

use DateTime;

abstract class Batch
{
    protected DateTime $date;
    protected array $consignments;

    public function start()
    {
        $this->date = new DateTime();
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function getNumberOfConsignments(): int
    {
        return count($this->consignments);
    }
}
