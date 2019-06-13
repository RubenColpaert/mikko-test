<?php

namespace Ruben\Salary;

use Carbon\Carbon;

class BonusSalary extends Salary
{
    /**
     * Generate the date for the salary.
     *
     * @param. int  $month
     * @return \Carbon\Carbon
     */
    protected function generateDate(int $month): Carbon
    {
        $date = Carbon::create($this->year, $month, 15)->addMonth();

        if ($date->isWeekend()) {
            $date->next(Carbon::WEDNESDAY);
        }

        return $date;
    }
}
