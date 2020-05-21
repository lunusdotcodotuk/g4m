<?php declare(strict_types=1);

namespace G4M\Models\Consignment\Number;

class RoyalMail extends Number implements NumberInterface
{
    const PATTERN = "/^[A-Z]{2}[0-9]{6}$/";

    public function generate()
    {
        return $this->generateRandomLetters(2) . $this->generateRandomNumbers(6);
    }
}
