<?php

namespace Ruben\Salary;

use Carbon\Carbon;

abstract class Salary implements SalaryInterface
{
    use DateValidationTrait;

    /**
     * The months of the year.
     */
    const JANUARY = 1;
    const FEBRUARY = 2;
    const MARCH = 3;
    const APRIL = 4;
    const MAY = 5;
    const JUNE = 6;
    const JULY = 7;
    const AUGUST = 8;
    const SEPTEMBER = 9;
    const OCTOBER = 10;
    const NOVEMBER = 11;
    const DECEMBER = 12;

    /**
     * @var int The year the salary dates should be calculated for.
     */
    protected $year;

    public function __construct(int $year)
    {
        $this->year = $year;
    }

    /**
     * Get the date when the salary should be paid for a given month.
     *
     * @param. int  $month
     * @return string
     */
    public function getSalaryDate(int $month): string
    {
        $this->validateMonth($month);
        
        $date = $this->generateDate($month);

        return $date->toDateString();
    }

    /**
     * Generate the date for the salary.
     *
     * @param. int  $month
     * @return \Carbon\Carbon
     */
    abstract protected function generateDate(int $month): Carbon;
}
