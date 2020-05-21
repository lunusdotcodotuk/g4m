<?php declare(strict_types=1);

namespace G4M\Models\Consignment\Number;

class RoyalMail
{
    const PATTERN = "/^[A-Z]{2}[0-9]{6}$/";

    function generateTwoRandomLetters() {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 2; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function generateSixRandomNumbers() {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 6; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function generate()
    {
        return $this->generateTwoRandomLetters() . $this->generateSixRandomNumbers();
    }
}
