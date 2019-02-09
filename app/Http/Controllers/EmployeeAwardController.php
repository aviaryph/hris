<?php

namespace App\Http\Controllers;

use App\EmployeeAward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeAwardController extends Controller
{
    public function index()
    {
        $data = DB::table('employee_awards as ea')
//            ->select('ea.id as id','firstname','lastname','employee_id','award_information')
            ->join('employee', 'ea.employee_id', '=', 'employee.id')
            ->join('settings_constants as sc', 'ea.award_type_id', '=', 'sc.id')
            ->whereNull('ea.deleted_at')
            ->get();

       // dd($data);

        //$data = EmployeeAward::all();
        return view('Employee.award', compact('data'));
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

    public function update(Request $request, EmployeeAward $employeeAward)
    {
        EmployeeAward::find($employeeAward->id)->update($request->all());
        $notification = array(
            'message' => 'Employee Award Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function destroy(EmployeeAward $employeeAward)
    {
        EmployeeAward::find($employeeAward->id)->delete();
        $notification = array(
            'message' => 'Employee Award Deleted Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
