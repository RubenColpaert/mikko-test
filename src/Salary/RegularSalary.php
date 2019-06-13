<?php

namespace Ruben\Salary;

use Carbon\Carbon;

class RegularSalary extends Salary
{
    /**
     * Generate the date for the salary.
     *
     * @param. int  $month
     * @return \Carbon\Carbon
     */
    protected function generateDate(int $month): Carbon
    {
        $date = Carbon::create($this->year, $month)->lastOfMonth();

        if ($date->isWeekend()) {
            $date->lastOfMonth(Carbon::FRIDAY);
        }

        return $date;
    }
}
