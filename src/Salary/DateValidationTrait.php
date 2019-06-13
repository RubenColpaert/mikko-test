<?php

namespace Ruben\Salary;

use Ruben\Salary\Exceptions\DateException;

trait DateValidationTrait
{
    /**
     * Validates a month.
     *
     * @param  int  $month
     * @throw  \RuntimeException
     */
    protected function validateMonth(int $month)
    {
        if ($month < 1 || $month > 12) {
            throw DateException::invalidMonth();
        }
    }
}
