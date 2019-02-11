<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Company;
use App\department;
use App\designation;
use App\Employee;
use App\EmployeeEmployment;
use App\OfficeShift;
use App\User;
use function foo\func;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $data = DB::table('employee')
                ->select('company.id', 'company.name as company_name', 'company_designation.id', 'company_designation.designation_name',
                    'employee.id as employee_id', 'employee.employee_no', 'employee.firstname', 'employee.lastname',
                    'employee.current_address', 'employee.company_id', 'employee.gender', 'employee.email', 'employee_employment.designation',
                    'employee_employment.employee_id', 'users.username', 'users.employee_id')
                ->join('employee_employment', 'employee_employment.employee_id', '=', 'employee.id')
                ->join('company', 'company.id', '=', 'employee.company_id')
                ->join('company_designation', 'company_designation.id', '=', 'employee_employment.designation')
                ->join('users', 'users.employee_id', '=', 'employee.id')
                ->get();
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

//        dd($request->all());

//        try{
//            DB::beginTransaction();
//
//            DB::commit();
//        }
//        catch (\Exception $e){
//            DB::rollBack();
//        }

        DB::transaction(function () use ($request){
            $employee_id = Employee::create($request->only(
                "company_id", "employee_no", "firstname", "lastname", "middlename", "suffix", "email", "mobile_no", "telephone_no",
                "gender", "birthday", "birthplace", 'age'))->id;

            $request->merge(['employee_id'=>$employee_id]);

            EmployeeEmployment::create($request->only(
                'employee_id', 'department', 'branch', 'designation', 'date_hired', 'contract_start', 'schedule_type', 'employee_type',
                'employment_status'
            ));


            User::create(
                $request->only('username', 'password', 'employee_id', 'company_id', 'role_id')
            );

        });


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
