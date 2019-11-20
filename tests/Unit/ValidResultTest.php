<?php

declare(strict_types=1);

namespace webignition\BasilValidationResult\Tests\Unit;

use PHPUnit\Framework\TestCase;
use webignition\BasilValidationResult\ValidResult;

class ValidResultTest extends TestCase
{
    public function testCreate()
    {
        $subject = new \stdClass();

        $result = new ValidResult($subject);

        $this->assertTrue($result->getIsValid());
        $this->assertSame($subject, $result->getSubject());
    }
}
