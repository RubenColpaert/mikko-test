<?php

namespace Ruben\Salary;

interface SalaryInterface
{
    /**
     * Get the date when the salary should be paid for a given month.
     *
     * @param. int  $month
     * @return string
     */
    public function getSalaryDate(int $month): string;
}
