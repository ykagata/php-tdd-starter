<?php
declare(strict_types=1);

namespace PhpTdd\Test\TestCase;

use PHPUnit\Framework\TestCase;
use PhpTdd\Money\Dollar;

final class DollarTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertSame(10, $five->amount);
    }
}
