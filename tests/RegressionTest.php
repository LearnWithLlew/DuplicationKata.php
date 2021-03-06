<?php
declare(strict_types=1);

namespace LearningWithLlew\Tests;

use ApprovalTests\Approvals;
use LearnWithLlew\Lesson1AStraight;
use LearnWithLlew\Lesson2AVariable;
use LearnWithLlew\Lesson2B;
use LearnWithLlew\Lesson3AHigherOrderFunctions;
use LearnWithLlew\Lesson3B;
use PHPUnit\Framework\TestCase;

class RegressionTest extends TestCase
{
    /** @test */
    public function shouldTestLesson1AStraight()
    {
        // Arrange
        $lesson = new Lesson1AStraight();

        // Act
        $lesson->singCatSong();
        // Assert
        Approvals::verifyString($lesson->song);
    }

    /** @test */
    public function shouldTestLesson2AVariable()
    {
        // Arrange
        $lesson = new Lesson2AVariable();

        // Act
        $lesson->singBottlesOfBeer();
        // Assert
        Approvals::verifyString($lesson->song);
    }

    /** @test */
    public function shouldTestLesson2B()
    {
        $lesson = new Lesson2B();
        $names = ["Llewellyn", "Samatha", "Tomas", "Emilia"];
        $lesson->singSong(1, $names);
        $lesson->singSong(2, $names);
        $lesson->singSong(3, $names);
        Approvals::verifyString($lesson->song);
    }

    /** @test */
    public function shouldTestLesson3A()
    {
        // Arrange
        $lesson = new Lesson3AHigherOrderFunctions();

        // Act
        $lesson->singCheers();
        // Assert
        Approvals::verifyString($lesson->song);
    }

    /** @test */
    public function shouldTestLesson3B()
    {
        $lesson = new Lesson3B();
        $names = ["Llewellyn", "Samatha", "Tomas", "Emilia"];
        $lesson->singSong(1, $names);
        $lesson->singSong(2, $names);
        $lesson->singSong(3, $names);
        Approvals::verifyString($lesson->song);
    }

}
