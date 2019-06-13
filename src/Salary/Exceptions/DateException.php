<?php

namespace Ruben\Salary\Exceptions;

class DateException extends \RuntimeException
{
    /**
     * Invalid month.
     *
     * @return self
     */
    public static function invalidMonth()
    {
        return new self("The month should be between 1 and 12");
    }
}
