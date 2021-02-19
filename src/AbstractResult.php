<?php

declare(strict_types=1);

namespace webignition\BasilValidationResult;

abstract class AbstractResult implements ResultInterface
{
    private bool $isValid;

    /**
     * @var mixed
     */
    private $subject;

    /**
     * @param mixed $subject
     */
    public function __construct(bool $isValid, $subject)
    {
        $this->isValid = $isValid;
        $this->subject = $subject;
    }

    public function getIsValid(): bool
    {
        return $this->isValid;
    }

    public function getSubject()
    {
        return $this->subject;
    }
}
