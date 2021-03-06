<?php
declare(strict_types=1);

namespace LearnWithLlew;


class Lesson3AHigherOrderFunctions extends Song
{
    public function singCheers(): void
    {
        $number = 2;
        $this->sing($number . "! ");
        $number = $number + 2;
        $this->sing($number . "! ");
        $number = $number + 2;
        $this->sing($number . "! ");
        $number = $number + 2;
        $this->sing($number . "! ");
        $this->sing("Who do we appreciate?");
        $number = 17;
        $this->sing($number . "! ");
        $number = $this->getNextPrime($number);
        $this->sing($number . "! ");
        $number = $this->getNextPrime($number);
        $this->sing($number . "! ");
        $number = $this->getNextPrime($number);
        $this->sing($number . "! ");
        $this->sing("These are the primes, that we find fine!");
    }

    private function getNextPrime(int $number): int
    {
        switch ($number) {
            case 13 :
                return 17;
            case 17 :
                return 19;
            case 19 :
                return 23;
            case 23 :
                return 29;
        }
        return 0;
    }
}