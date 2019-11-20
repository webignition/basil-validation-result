<?php

declare(strict_types=1);

namespace webignition\BasilValidationResult;

interface InvalidResultInterface extends ResultInterface
{
    public function getType(): string;
    public function getReason(): string;
    public function getPrevious(): ?InvalidResultInterface;
    public function withContext(array $context): InvalidResultInterface;
    public function getContext(): array;
}
