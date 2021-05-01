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
}
