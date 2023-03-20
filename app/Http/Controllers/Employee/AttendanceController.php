<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Employee $employee)
    {
        $attendances = $employee->attendances()
            ->latest('id')
            ->paginate();

        return view('employees.attendances.index', compact('employee', 'attendances'));
    }
}
