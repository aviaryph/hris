<?php

namespace App\Http\Controllers;

use App\SettingsConstans;
use App\Employee;
use App\EmployeeDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EmployeeDocumentController extends Controller
{
    public function index()
    {
        $data = DB::table('employee_awards')
            ->select('settings_constants.value as award_type','employee_awards.id as id','award_type_id','firstname','lastname','employee_awards.employee_id','employee.employee_no','gift_item','cash_price','award_photo','award_month_year','award_information','description')
            ->join('employee', 'employee_awards.employee_id', '=', 'employee.id')
            ->join('settings_constants', 'employee_awards.award_type_id', '=', 'settings_constants.id')
            ->whereNull('employee_awards.deleted_at')
            ->get();
//dd($data);
        $employee = Employee::all()->sortByDesc('lastname');
        $award_type=SettingsConstans::all()->where('type', 'Award Type')->sortByDesc('value');

        return view('Employee.award', compact('data','employee','award_type'));
    }

    public function store(Request $request)
    {
        EmployeeAward::create($request->all());
        $notification = array(
            'message' => 'Employee Award Created Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function update(Request $request, EmployeeDocument $employeeAward)
    {
        EmployeeDocument::find($employeeAward->id)->update($request->all());
        $notification = array(
            'message' => 'Employee Award Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function destroy(EmployeeDocument $employeeAward)
    {
        EmployeeDocument::find($employeeAward->id)->delete();
        $notification = array(
            'message' => 'Employee Document Deleted Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
