<?php

namespace Tests;

use Core\Application;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    public function testInit(): void
    {
        self::assertEquals('Started', (new Application())->init());
    }

    public function testHello(): void
    {
        self::assertEquals('hello', (new Application())->hello());
    }

    public function testT(): void
    {
        self::assertEquals(10', (new Application())->t());
    }
}
