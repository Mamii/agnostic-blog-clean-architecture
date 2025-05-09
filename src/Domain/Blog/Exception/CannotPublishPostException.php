<?php

declare(strict_types=1);

namespace App\Domain\Blog\Exception;

use Exception;
use Throwable;

final class CannotPublishPostException extends Exception
{
    public function __construct(?Throwable $previous = null)
    {
        parent::__construct('A post must have a title and content to be published.', 0, $previous);
    }
}
