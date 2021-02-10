<?php
namespace LearningWithLlew\Tests;

use ApprovalTests\Approvals;
use LearnWithLlew\Lesson1AStraight;
use LearnWithLlew\Lesson2AVariable;
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
}
