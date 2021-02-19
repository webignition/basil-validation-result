<?php

declare(strict_types=1);

namespace webignition\BasilValidationResult\Tests\Unit;

use PHPUnit\Framework\TestCase;
use webignition\BasilValidationResult\InvalidResult;

class InvalidResultTest extends TestCase
{
    public function testCreate(): void
    {
        $subject = new \stdClass();
        $type = 'type';
        $reason = 'empty';

        $result = new InvalidResult($subject, $type, $reason);

        $this->assertFalse($result->getIsValid());
        $this->assertSame($subject, $result->getSubject());
        $this->assertSame($type, $result->getType());
        $this->assertSame($reason, $result->getReason());
    }

    public function testCreateUnhandledModelResult(): void
    {
        $subject = new \stdClass();

        $result = InvalidResult::createUnhandledSubjectResult($subject);

        $this->assertFalse($result->getIsValid());
        $this->assertSame($subject, $result->getSubject());
        $this->assertSame(InvalidResult::TYPE_UNHANDLED, $result->getType());
        $this->assertSame('', $result->getReason());
    }

    public function testGetPrevious(): void
    {
        $previous = new InvalidResult(new \stdClass(), 'previous type', 'previous reason');
        $result = new InvalidResult(new \stdClass(), 'type', 'reason', $previous);

        $this->assertSame($previous, $result->getPrevious());
    }

    public function testGetContext(): void
    {
        $context = [
            'foo' => 'bar',
        ];

        $invalidResult = new InvalidResult(new \stdClass(), 'type', 'reason');
        $invalidResult = $invalidResult->withContext($context);

        $this->assertSame($context, $invalidResult->getContext());
    }
}
