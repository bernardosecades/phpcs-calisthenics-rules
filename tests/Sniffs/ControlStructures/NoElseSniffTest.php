<?php

namespace ObjectCalisthenics\Tests\Sniffs\ControlStructures;

use ObjectCalisthenics\Tests\CodeSnifferRunner;
use PHPUnit\Framework\TestCase;

/**
 * @covers \ObjectCalisthenics\Sniffs\ControlStructures\NoElseSniff
 */
final class NoElseSniffTest extends TestCase
{
    public function testSniff()
    {
        $codeSnifferRunner = new CodeSnifferRunner();
        $errorCount = $codeSnifferRunner->detectErrorCountInFileForSniff(
            __DIR__.'/NoElseSniffTest.inc',
            'ObjectCalisthenics.ControlStructures.NoElse'
        );

        $this->assertSame(5, $errorCount);
    }
}
