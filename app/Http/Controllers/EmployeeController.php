<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Company;
use App\department;
use App\designation;
use App\Employee;
use App\OfficeShift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $data = "";
        $company = Company::all()->sortByDesc('id');
        $branch = Branch::all()->sortByDesc('id');
        $schedule = OfficeShift::all()->sortByDesc('id');
        $department = department::all()->sortByDesc('id');
        $designation = designation::all()->sortByDesc('id');
        return view('Employee.employee-list', compact('data', 'company', 'branch', 'schedule', 'department', 'designation'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {

        dd($request->all());

        $notification = array(
            'message' => 'Employee Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function show(Employee $employee)
    {
    }

    public function edit(Employee $employee)
    {
    }

    public function update(Request $request, Employee $employee)
    {
        Employee::find($employee->id)->update($request->all());
        $notification = array(
            'message' => 'Employee Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function destroy(Employee $employee)
    {
        Employee::find($employee->id)->delete();
        $notification = array(
            'message' => 'Employee Deleted Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }

}
