<?php
declare(strict_types=1);

namespace LearnWithLlew;


class Lesson3B extends Song
{
    public function singSong(int $style, array $names): void
    {
        switch ($style) {
            case 1 :
                foreach ($names as $name) {
                    if (substr($name, 0, strlen("L")) === "L") {
                        $this->sing("Hip Hip Horray! For " . $name);
                    } else {
                        $this->sing("Hello " . $name . ", it's nice to meet you.");
                    }
                }
                break;
            case 2 :
                foreach ($names as $name) {
                    if (strpos($name, "a", 0) != false) {
                        $this->sing(strtoupper($name) . "! Yay " . $name . "!");
                    } else {
                        $this->sing("Hello " . $name . ", it's nice to meet you.");
                    }
                }
                break;
            case 3 :
                foreach ($names as $name) {
                    $this->sing("Hello " . $name . ", it's nice to meet you.");
                }
                break;
        }
    }
}