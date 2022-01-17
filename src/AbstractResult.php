<?php

declare(strict_types=1);

namespace webignition\BasilValidationResult;

abstract class AbstractResult implements ResultInterface
{
    public function __construct(
        private bool $isValid,
        private mixed $subject
    ) {
    }

    public function getIsValid(): bool
    {
        return $this->isValid;
    }

    public function getSubject(): mixed
    {
        return $this->subject;
    }
}
