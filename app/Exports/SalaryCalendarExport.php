<?php

namespace App\Exports;

use Ruben\Salary\SalaryCalendar;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;

class SalaryCalendarExport implements FromCollection
{
    use Exportable;

    /**
     * @var int The year the salary calendar should be calculated for.
     */
    protected $year;

    public function __construct(int $year)
    {
        $this->year = $year;
        $this->fileName = 'salary_calendar_' . $year . '.csv';
    }

    public function collection()
    {
        return new Collection(SalaryCalendar::getDatesForYear($this->year));
    }
}
