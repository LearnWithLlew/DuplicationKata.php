<?php
declare(strict_types=1);

namespace LearnWithLlew;


class Song
{
    /** @var string */
    public $song = "";

    public function sing(string $line): void
    {
        $this->song .= $line . "\n";
    }
}