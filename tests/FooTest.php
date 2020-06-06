<?php

declare(strict_types=1);

namespace Tests;

use Jamband\Foo\Foo;
use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    public function testGetUrl(): void
    {
        $foo = new Foo('https://example.com');
        $this->assertSame('https://example.com', $foo->getUrl());
    }
}
