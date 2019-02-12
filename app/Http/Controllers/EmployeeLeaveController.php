<?php

namespace App\Http\Controllers;

use App\EmployeeLeave;
use App\Employee;
use App\Http\Controllers\Controller;
use App\SettingsConstans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeLeaveController extends Controller
{
    public function index()
    {
        $data = DB::table('employee_leave_applications')
            ->select('settings_constants.value as leave_type','employee_leave_applications.id as id','leave_type_id','firstname','lastname','employee_leave_applications.employee_id','employee.employee_no','from_date','to_date','reason','remarks','employee_leave_applications.created_at as created_at','employee_leave_applications.status as status')
            ->join('employee', 'employee_leave_applications.employee_id', '=', 'employee.id')
            ->join('settings_constants', 'employee_leave_applications.leave_type_id', '=', 'settings_constants.id')
            ->whereNull('employee_leave_applications.deleted_at')
            ->get();
 //dd($data);
        $employee = Employee::all()->sortByDesc('lastname');
        $leave_type=SettingsConstans::all()->where('type', 'Leave Type')->sortByDesc('value');

        return view('Employee.leave', compact('data','employee','leave_type'));
    }

    public function store(Request $request)
    {
        EmployeeLeave::create($request->all());
        $notification = array(
            'message' => 'Employee Leave Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function update(Request $request, EmployeeLeave $employeeAward)
    {
        EmployeeLeave::find($employeeLeave->id)->update($request->all());
        $notification = array(
            'message' => 'Employee Leave Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function destroy(EmployeeLeave $employeeLeave)
    {
        EmployeeLeave::find($employeeLeave->id)->delete();
        $notification = array(
            'message' => 'Employee Leave Deleted Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }

}
