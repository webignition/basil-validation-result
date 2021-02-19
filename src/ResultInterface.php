<?php

declare(strict_types=1);

namespace webignition\BasilValidationResult;

interface ResultInterface
{
    public function getIsValid(): bool;

    /**
     * @return mixed
     */
    public function getSubject();
}
