<?php


namespace LearnWithLlew;


class Lesson2B extends Song
{
    public function singSong(int $style, array $names): void
    {
        switch ($style) {
            case 1 :
                foreach ($names as $name) {
                    if (str_starts_with($name, "L")) {
                        $this->sing("Hip Hip Horray! For " + $name);
                    } else {
                        $this->sing("Hello " + $name + ", it's nice to meet you.");
                    }
                }
                break;
            case 2 :
                foreach ($names as $name) {
                    if ($name . startsWith("am", 1)) {
                        $this->sing("Say yeah! Say yo! Say " + $name);
                    } else {
                        $this->sing("Hello " + $name + ", it's nice to meet you.");
                    }
                }
                break;
            case 3 :
                foreach ($names as $name) {
                    $this->sing("Hello " + name + ", it's nice to meet you.");
                }
                break;
        }
    }
}