<?php

namespace Tests;

use Core\Application;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    public function testInit(): void
    {
        self::assertEquals('Started1', (new Application())->init());
    }

    public function testHello(): void
    {
        self::assertEquals('hello', (new Application())->hello());
    }

    public function testHelp(): void
    {
        self::assertEquals('help', (new Application())->help());
    }
}
