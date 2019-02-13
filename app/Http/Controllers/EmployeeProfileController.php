<?php

namespace App\Http\Controllers;

use App\Employee;
use App\EmployeeContact;
use App\EmployeeDocument;
use App\EmployeeEducation;
use App\EmployeeEmployment;
use App\EmployeeProfile;
use App\SettingsConstans;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class EmployeeProfileController extends Controller
{
    public function index(Request $request)
    {
        $employee_id='1';

//SELECTid,company_id,employee_no,profile,firstname,middlename,lastname,mi,suffix,nickname,gender,
//civil_status,nationality,religion,height,weight,birthday,age,birthplace,blood_type,region,province,
//ethnicity,current_address,current_city,permanent_address,permanent_city,email,mobile_no,telephone_no,fax_no,
//sss_no,philhealth_no,pagibig_no,tin_no,status,deleted_at,created_at,updated_at FROM employee WHERE 1

        //$nationality=SettingsConstans::all()->where('type', 'Nationality')->sortByDesc('value');
        $employee_documents=EmployeeDocument::all();
        $data_document = DB::table('employee_documents')
            ->select('settings_constants.value as document_type','employee_documents.id as id','document_type_id','employee.employee_no','employee_documents.employee_id','date_of_expiry','title','notification_email','is_alert','description','document_file')
            ->join('settings_constants', 'employee_documents.document_type_id', '=', 'settings_constants.id')
            ->join('employee', 'employee_documents.employee_id', '=', 'employee.id')
            ->whereNull('employee_documents.deleted_at')
            ->where('employee.id', '1')
            ->get();

        $data_announcement = DB::table('announcements as a')
            ->select('a.id as id','ee.employee_id','a.department','published_by','location','summary','title','start_date','end_date','description')
            ->join('company_department as cd', 'a.department', '=', 'cd.id')
            ->join('employee_employment as ee', 'ee.department', '=', 'cd.id')
            ->whereNull('a.deleted_at')
         //   ->groupBy('a.id')
//  ->where('employee_employment.id', '$employee_id')
            ->get();
//dd($data_announcement);

        $document_type=SettingsConstans::all()->where('type', 'Document Type')->sortByDesc('value');
        $data_employee=  DB::table('employee')->where('id', '1')->get();
        $data_employment=  DB::table('employee_employment')->where('employee_id', '1')->get();
        $data_education=  DB::table('employee_educations')->where('employee_id', '1')->get();
        $data_work_experience=  DB::table('employee_work_experience')->where('employee_id', '1')->get();
        $education_level=SettingsConstans::all()->where('type', 'Education Level')->sortByDesc('value');

        //dd($data_employment);
       return view('Employee.profile', compact('document_type','data_employee','employee_id','data_document','data_announcement','data_employment','data_education','education_level','data_work_experience'));
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmployeeProfile  $employeeProfile
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeProfile $employeeProfile)
    {
        //
    }

    public function showProfile(Request $request, $id)
    {
        $value = $request->session()->get('key');

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmployeeProfile  $employeeProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeProfile $employeeProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmployeeProfile  $employeeProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeProfile $employeeProfile)
    {
        //
    }

    public function updateBasicInfo(Request $request, Employee $employee)
    {
        Employee::find($employee->id)->update($request->all());
        $notification = array(
            'message' => 'Employee Basic Information Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function updateBasicContactInfo(Request $request, Employee $employee)
    {
        Employee::find($employee->id)->update($request->all());
        $notification = array(
            'message' => 'Employee Basic Contact Information Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function updateSocialNetworking(Request $request, Employee $employee)
    {
        Employee::find($employee->id)->update($request->all());
        $notification = array(
            'message' => 'Employee Social Networking Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function destroy(EmployeeProfile $employeeProfile)
    {
        //
    }
// N ===================================================


}
