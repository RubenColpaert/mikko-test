<?php

namespace Ruben\Salary;

use Carbon\Carbon;

class SalaryCalendar
{
    /**
     * Get the salary dates for a given year.
     *
     * @param  int  $year
     * @return array
     */
    public static function getDatesForYear(int $year): array
    {
        $dates[] = ['Month', 'Regular Salary Date', 'Bonus Salary Date'];

        $monthlySalary = new RegularSalary($year);
        $bonusSalary = new BonusSalary($year);

        for ($month = 1; $month <= 12; $month++) { 
            $dates[] = [
                Carbon::create($year, $month)->monthName,
                $monthlySalary->getSalaryDate($month),
                $bonusSalary->getSalaryDate($month),
            ];
        }

        return $dates;
    }
}
