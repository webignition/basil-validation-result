<?php

declare(strict_types=1);

namespace webignition\BasilValidationResult;

class ValidResult extends AbstractResult
{
    public function __construct($subject)
    {
        parent::__construct(true, $subject);
    }
}
