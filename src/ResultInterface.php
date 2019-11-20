<?php

declare(strict_types=1);

namespace webignition\BasilValidationResult;

interface ResultInterface
{
    public function getIsValid(): bool;
    public function getSubject();
}
