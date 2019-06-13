<?php

namespace Ruben\Salary;

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
            throw new \RuntimeException('The month should be between 1 and 12');
        }
    }
}
