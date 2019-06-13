<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use App\Http\Controllers\Controller;
use App\Exports\SalaryCalendarExport;

class SalaryController extends Controller
{
    /**
     * Generate and return the csv with salary dates.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Maatwebsite\Excel\Facades\Excel
     */
    public function export(Request $request)
    {
        $validatedData = $request->validate([
            'year' => 'required|integer|between:1000,9999',
        ]);

        $export = new SalaryCalendarExport($request->year);

        return $export->download(null, Excel::CSV);
    }
}