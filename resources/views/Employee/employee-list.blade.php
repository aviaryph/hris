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
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Designation</th>
                                                <th width="13%">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $row):
                                            <tr>
                                                <td>{{ $row->employee_id }}</td>
                                                <td>{{ $row->firstname }}</td>
                                                <td>{{ $row->username }}</td>
                                                <td>{{ $row->email }}</td>
                                                <td>{{ $row->designation_id }}</td>
                                                <td>
                                                    <div class="buttons-group">
                                                        <button class="btn btn-group btn-warning btn-xs" data-toggle="modal"  data-title="Create" data-target="#edit{{ $row->id }}"><i class="la la-edit"></i> </button>
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
               <form action="company" method="POST" enctype="multipart/form-data">
                   <div class="modal-header">
                       <h4 class="title" id="defaultModalLabel">New Employee Record</h4>
                   </div>
                   <div class="modal-body">
                       @csrf
                       <div class="col-md-12">


                           <div class="form-group row">
                               <div class="col-md-4">
                                   <label>Firstname</label>
                                   <input type="text" class="form-control"  name="first_name">
                               </div>
                               <div class="col-md-4">
                                   <label>Lastname</label>
                                   <input type="text" class="form-control"  name="last_name">
                               </div>
                               <div class="col-md-4">
                                   <label>Employee ID</label>
                                   <input type="text" class="form-control"  name="employee_id">
                               </div>
                           </div>

                           <div class="form-group row">
                               <div class="col-md-3">
                                   <label>Date Joined</label>
                                   <input type="date" class="form-control"  name="date_of_joining">
                               </div>
                           </div>
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <label>Department</label>
                                   <input type="text" class="form-control"  name="department_id">
                               </div>
                           </div>
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <label>Designation</label>
                                   <input type="text" class="form-control"  name="designation_id">
                               </div>
                           </div>
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <label>Role</label>
                                   <input type="text" class="form-control"  name="user_role_id">
                               </div>
                           </div>
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <label>Gender</label>
                                   <input type="text" class="form-control"  name="gender">
                               </div>
                           </div>
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <label>Username</label>
                                   <input type="text" class="form-control"  name="username">
                               </div>
                           </div>
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <label>Email</label>
                                   <input type="text" class="form-control"  name="email">
                               </div>
                           </div>
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <label>Office Shift</label>
                                   <input type="text" class="form-control"  name="office_shift_id">
                               </div>
                           </div>
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <label>Date of Birth</label>
                                   <input type="text" class="form-control"  name="date_of_birth">
                               </div>
                           </div>
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <label>Contact Number</label>
                                   <input type="text" class="form-control"  name="contact_no">
                               </div>
                           </div>
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <label>Password</label>
                                   <input type="text" class="form-control"  name="password">
                               </div>
                           </div>
                           <div class="form-group row">
                               <div class="col-md-3">
                                   <label>Confirm Password</label>
                                   <input type="text" class="form-control"  name="confirm-password">
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


    @foreach($data as $row):
    <div class="modal fade" id="delete{{ $row->department_id }}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <form action="department/{{ $row->department_id }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="title" id="defaultModalLabel">Delete Record</h4>
                    </div>
                    <div class="modal-body">
                        @csrf
                        @method('DELETE')
                        <p>Are you sure you want to delete this record?</p>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-dismiss="modal" type="button">Cancel</button>
                        <button type="submit" class="btn btn-warning">Delete Record</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach


@endsection

@section('script')
    <script src="{{ asset('app-assets') }}/js/scripts/tables/datatables-extensions/datatable-responsive.min.js"></script>


@endsection
