@extends('layout.app')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Employee List</h3>
                </div>
                <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right">
                        <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                        <div class="dropdown-menu arrow"><a class="dropdown-item" href="#"><i class="fa fa-calendar-check mr-1"></i> Calender</a><a class="dropdown-item" href="#"><i class="fa fa-cart-plus mr-1"></i> Cart</a><a class="dropdown-item" href="#"><i class="fa fa-life-ring mr-1"></i> Support</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fa fa-cog mr-1"></i> Settings</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body"><!-- Configuration option table -->

                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Employee List</h4>

                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table class="table table-striped table-bordered dataex-res-configuration">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Company</th>
                                                <th>Employee No</th>
                                                <th>Username</th>
                                                <th>Gender</th>
                                                <th>Email</th>
                                                <th>Designation</th>
                                                <th width="13%">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $row):
                                            <tr>
                                                <td>{{ $row->firstname . " " . $row->lastname }}</td>
                                                <td>{{ $row->company_name }}</td>
                                                <td>{{ $row->employee_no }}</td>
                                                <td>{{ $row->username }}</td>
                                                <td>{{ $row->gender }}</td>
                                                <td>{{ $row->email }}</td>
                                                <td>{{ $row->designation_name }}</td>
                                                <td>
                                                    <div class="buttons-group">
                                                        <a href="{{ url('/employee-profile/'.$row->employee_id) }}" class="btn btn-group btn-info btn-xs"><i class="la la-eye"></i> </a>
                                                        <button class="btn btn-group btn-danger btn-xs" data-toggle="modal" data-title="Edit" data-target="#delete{{ $row->id }}"><i class="la la-trash"></i> </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Configuration option table -->
            </div>
        </div>
    </div>

    <div class="menu pmd-floating-action" role="navigation">
        <a href="#" data-toggle="modal" data-target="#create" class="pmd-floating-action-btn btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-success" data-title="Create">
            <span class="pmd-floating-hidden">Primary</span>
            <i class="la la-plus-circle"></i>
        </a>
    </div>


   <div class="modal fade" id="create" tabindex="-1" role="dialog">
       <div class="modal-dialog modal-lg" role="document">
           <div class="modal-content">
               <form action="employee" method="POST" enctype="multipart/form-data">
                   <div class="modal-header">
                       <h4 class="title" id="defaultModalLabel">New Employee Record</h4>
                   </div>
                   <div class="modal-body">
                       @csrf
                       <div class="col-md-12">
                           <h4>Company Designation</h4>
                           <div class="form-group row">
                               <div class="col-md-6">
                                   <label>Company</label>
                                   <select name="company_id" class="form-control company">
                                       @foreach($company as $companies):
                                           <option value="{{ $companies->id }}">{{ $companies->name }}</option>
                                       @endforeach
                                   </select>
                               </div>
                               <div class="col-md-6">
                                   <label>Branch</label>
                                   <select name="branch" class="form-control">
                                       @foreach($branch as $branchs):
                                            <option value="{{ $branchs->id }}">{{ $branchs->location_name }}</option>
                                       @endforeach
                                   </select>
                               </div>
                           </div>
                           <div class="form-group row">
                               <div class="col-md-4">
                                   <label>Department</label>
                                   <select name="department" class="form-control">
                                       @foreach($department as $departments):
                                           <option value="{{ $departments->id }}">{{ $departments->department_name }}</option>
                                       @endforeach
                                   </select>
                               </div>
                               <div class="col-md-4">
                                   <label>Designation</label>
                                   <select name="designation" class="form-control">
                                       @foreach($designation as $designations):
                                            <option value="{{ $designations->id }}">{{ $designations->designation_name }}</option>
                                       @endforeach
                                   </select>
                               </div>
                               <div class="col-md-4">
                                   <label>Role</label>
                                   <select name="role_id" class="form-control">
                                       <option value="1">System Administrator</option>
                                       <option value="2">Employee</option>
                                   </select>
                               </div>
                           </div>
                           <div class="form-group row">
                               <div class="col-md-6 offset-3">
                                   <label>Employee No</label>
                                   <input type="text" class="form-control" name="employee_no" />
                               </div>
                           </div>
                           <h4>Personal Information</h4>
                           <div class="form-group row">
                               <div class="col-md-4">
                                   <label>First Name</label>
                                   <input type="text" class="form-control"  name="firstname">
                               </div>
                               <div class="col-md-3">
                                   <label>Last Name</label>
                                   <input type="text" class="form-control"  name="lastname">
                               </div>
                               <div class="col-md-3">
                                   <label>Middle Name</label>
                                   <input type="text" class="form-control"  name="middlename">
                               </div>
                               <div class="col-md-2">
                                   <label>Suffix</label>
                                   <input type="text" class="form-control" name="suffix">
                               </div>
                           </div>
                           <div class="form-group row">
                               <div class="col-md-4">
                                   <label>Email</label>
                                   <input type="email" name="email" class="form-control">
                               </div>
                               <div class="col-md-4">
                                   <label>Mobile No</label>
                                   <input type="tel" name="mobile_no" class="form-control">
                               </div>
                               <div class="col-md-4">
                                   <label>Telephone No</label>
                                   <input type="tel" name="telephone_no" class="form-control">
                               </div>
                           </div>
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <label>Gender</label>
                                   <select name="gender" class="form-control">
                                       <option value="Male">Male</option>
                                       <option value="Female">Female</option>
                                   </select>
                               </div>
                               <div class="col-md-4">
                                   <label>Birthday</label>
                                   <input type="date" class="form-control" id="birthday" max="{{ date("Y-m-d") }}" onfocusout='dateToAge()' name="birthday">
                                   <input class="form-control" type="text" name="age" id="age" readonly>
                               </div>
                               <div class="col-md-5">
                                   <label>Birth Place</label>
                                   <input type="text" class="form-control" name="birthplace" />
                               </div>
                           </div>
                           <div class="form-group row">
                               <div class="col-md-4">
                                   <label>Date Hired</label>
                                   <input type="date" class="form-control"  name="date_hired">
                               </div>
                               <div class="col-md-4">
                                   <label>Contract Start</label>
                                   <input type="date" class="form-control" name="contract_start">
                               </div>
                               <div class="col-md-4">
                                   <label>Schedule</label>
                                   <select name="schedule_type" class="form-control">
                                       @foreach($schedule as $schedules):
                                           <option value="{{ $schedules->id }}">{{ $schedules->shift_name }}</option>
                                       @endforeach
                                   </select>
                               </div>
                           </div>
                           <div class="form-group row">
                               <div class="col-md-6">
                                   <label>Employment Status</label>
                                   <select name="employment_status" class="form-control">
                                       <option value="1">Regular</option>
                                       <option value="2">Probationary</option>
                                   </select>
                               </div>
                               <div class="col-md-6">
                                   <label>Employment Type</label>
                                   <select name="employee_type" class="form-control">
                                       <option value="3">Full Time</option>
                                       <option value="4">Part Time</option>
                                   </select>
                               </div>
                           </div>
                           <h4>Credentials</h4>
                           <div class="form-group row">
                               <div class="col-md-4">
                                   <label>Username</label>
                                   <input type="text" class="form-control"  name="username">
                               </div>
                               <div class="col-md-4">
                                   <label>Password</label>
                                   <input type="password" class="form-control"  name="password">
                               </div>
                               <div class="col-md-4">
                                   <label>Confirm Password</label>
                                   <input type="password" class="form-control"  name="confirm-password">
                               </div>
                           </div>
                       </div>

                   </div>
                   <div class="modal-footer">
                       <button class="btn btn-danger" data-dismiss="modal" type="button">Cancel</button>
                       <button type="submit" class="btn btn-info">Save Record</button>
                   </div>
               </form>
           </div>
       </div>
       </div>


    {{--@foreach($data as $row):--}}
    {{--<div class="modal fade" id="delete{{ $row->department_id }}" tabindex="-1" role="dialog">--}}
        {{--<div class="modal-dialog modal-sm" role="document">--}}
            {{--<div class="modal-content">--}}
                {{--<form action="department/{{ $row->department_id }}" method="POST" enctype="multipart/form-data">--}}
                    {{--<div class="modal-header">--}}
                        {{--<h4 class="title" id="defaultModalLabel">Delete Record</h4>--}}
                    {{--</div>--}}
                    {{--<div class="modal-body">--}}
                        {{--@csrf--}}
                        {{--@method('DELETE')--}}
                        {{--<p>Are you sure you want to delete this record?</p>--}}

                    {{--</div>--}}
                    {{--<div class="modal-footer">--}}
                        {{--<button class="btn btn-danger" data-dismiss="modal" type="button">Cancel</button>--}}
                        {{--<button type="submit" class="btn btn-warning">Delete Record</button>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--@endforeach--}}


@endsection

@section('script')
    <script src="{{ asset('app-assets') }}/js/scripts/tables/datatables-extensions/datatable-responsive.min.js"></script>
    <script>
        function getMiddleInitial(){
            var str     = $("#middlename").val();
            var matches = str.match(/\b(\w)/g);
            var acronym = matches.join('.');
            $("#middleInitial").val(acronym + '.');
        }
        function dateToAge(){
            var dateString = $("#birthday").val();
            var today = new Date();
            var birthDate = new Date(dateString);
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            $("#age").val(age);
        }
    </script>

@endsection
