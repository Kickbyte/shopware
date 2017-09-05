<?php

namespace Shopware\Api\Exception;

use Throwable;

class FormatNotSupportedException extends \Exception
{
    public function __construct(string $extension, $code = 0, Throwable $previous = null)
    {
        $message = sprintf('The extension "%s" is not supported.', $extension);

        parent::__construct($message, $code, $previous);
    }
}