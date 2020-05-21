<?php declare(strict_types=1);

namespace G4M\Models\Consignment\Number;

class Anc extends Number implements NumberInterface
{
    const PATTERN = "/^[A-Z]{4}[0-9]{10}$/";

    public function generate()
    {
        return $this->generateRandomLetters(4) . $this->generateRandomNumbers(10);
    }
}
