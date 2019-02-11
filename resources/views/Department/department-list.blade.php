@extends('layout.app')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Department List</h3>
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
                                    <h4 class="card-title">Department List</h4>

                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table class="table table-striped table-bordered dataex-res-configuration">
                                            <thead>
                                            <tr>
                                                <th>Department Name</th>
                                                <th>Department Head</th>
                                                <th>Branch</th>
                                                <th width="13%">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $row):
                                            <tr>
                                                <td>{{ $row->department_name }}</td>
                                                <td>{{ $row->firstname . " " . $row->lastname }}</td>
                                                <td>{{ $row->location_name }}</td>
                                                <td>
                                                    <div class="buttons-group">
                                                        <button class="btn btn-group btn-warning btn-xs" data-toggle="modal" data-target="#edit{{ $row->department_id }}"><i class="la la-edit"></i> </button>
                                                        <button class="btn btn-group btn-danger btn-xs" data-toggle="modal" data-target="#delete{{ $row->department_id }}"><i class="la la-trash"></i> </button>
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


    <div class="modal fade" id="create" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form action="department" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="title" id="defaultModalLabel">New Department Record</h4>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label>Department Name</label>
                                    <input type="text" class="form-control" name="department_name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Branch Name</label>
                                    <select name="branch_id" class="form-control" id="branch">
                                        @foreach($branch as $branchs):
                                            <option value="{{ $branchs->id }}">{{ $branchs->location_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Department Head</label>
                                    <select name="department_head" class="form-control" id="department">
                                        @foreach($employee as $employees):
                                            <option value="{{ $employees->id }}">{{ $employees->firstname . " " . $employees->lastname }}</option>
                                        @endforeach
                                    </select>
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
    <div class="modal fade" id="edit{{ $row->department_id }}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form action="department/{{ $row->department_id }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="title" id="defaultModalLabel">Edit Record</h4>
                    </div>
                    <div class="modal-body">
                        @csrf
                        @method('PATCH')
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label>Department Name</label>
                                    <input type="text" class="form-control" name="department_name" required value="{{ $row->department_name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Branch Name</label>
                                    <select name="branch_id" class="form-control" id="branch">
                                        @foreach($branch as $branchs):
                                        <option value="{{ $branchs->id }}">{{ $branchs->location_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Department Head</label>
                                    <select name="department_head" class="form-control" id="department">
                                        @foreach($employee as $employees):
                                        <option value="{{ $employees->id }}">{{ $employees->firstname . " " . $employees->lastname }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-dismiss="modal" type="button">Cancel</button>
                        <button type="submit" class="btn btn-info">Update Record</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach

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
    <script>
        $("#department, #branch").select2();
    </script>
    <script>

        function getIntials() {

            let comCode = $("#company_name").val();
            var initials = comCode.match(/\b\w/g) || [];
            initials = ((initials.shift() || '') + (initials.pop() || '')).toUpperCase();


            $("#company_code").val(initials + "-<?php echo date('ymds'); ?>");


        }

    </script>
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
            $("#age").val(age+'');
        }
    </script>

@endsection
