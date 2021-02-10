<?php
namespace LearningWithLlew\Tests;

use ApprovalTests\Approvals;
use LearnWithLlew\Lesson1AStraight;
use PHPUnit\Framework\TestCase;

class RegressionTest extends TestCase
{
    /** @test */
    public function testLesson1AStraight()
    {
        // Arrange
        $lesson = new Lesson1AStraight();

        // Act
        $lesson->singCatSong();
        // Assert
        Approvals::verifyString($lesson->song);
    }
}
