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
                                                <th>Company</th>
                                                <th>Email</th>
                                                <th>Website</th>
                                                <th>Company Type</th>
                                                <th>Address</th>
                                                <th>City</th>
                                                <th width="13%">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $row):
                                            <tr>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->email }}</td>
                                                <td>{{ $row->website }}</td>
                                                <td>{{ $row->company_type }}</td>
                                                <td>{!! $row->address_1 !!}</td>
                                                <td>{{ $row->city }}</td>
                                                <td>
                                                    <div class="buttons-group">
                                                        <button class="btn btn-group btn-warning btn-xs" data-toggle="modal" data-target="#edit{{ $row->id }}"><i class="la la-edit"></i> </button>
                                                        <button class="btn btn-group btn-danger btn-xs" data-toggle="modal" data-target="#delete{{ $row->id }}"><i class="la la-trash"></i> </button>
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
                <form action="department" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="title" id="defaultModalLabel">New Company Record</h4>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label>Company Code</label>
                                    <input type="text" class="form-control" id="company_code" name="company_code" required readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label>Company Name</label>
                                    <input type="text" class="form-control" id="company_name" onchange="getIntials()" name="name" required >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Business Email</label>
                                    <input type="email" class="form-control" name="email" />
                                </div>
                                <div class="col-md-4">
                                    <label>Company Type</label>
                                    <select name="company_type" class="form-control">
                                        <option value="Corporate">Corporate</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Website URL</label>
                                    <input type="text" class="form-control" name="website_url" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label>Address Line 1</label>
                                    <textarea name="address_1" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label>Address Line 2</label>
                                    <textarea name="address_2" class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>City</label>
                                    <input class="form-control" type="text" name="city" required />
                                </div>
                                <div class="col-md-4">
                                    <label>State</label>
                                    <input class="form-control" type="text" name="state" required />
                                </div>
                                <div class="col-md-4">
                                    <label>Zip Code</label>
                                    <input class="form-control" type="text" name="zipcode" required />
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
    <div class="modal fade" id="edit{{ $row->id }}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form action="department/{{ $row->id }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="title" id="defaultModalLabel">New Company Record</h4>
                    </div>
                    <div class="modal-body">
                        @csrf
                        @method('PATCH')
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label>Company Code</label>
                                    <input type="text" class="form-control" id="company_code" name="company_code" value="{{ $row->company_code }}" required readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label>Company Name</label>
                                    <input type="text" class="form-control" id="company_name" value="{{ $row->name }}" name="name" required >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Business Email</label>
                                    <input type="email" class="form-control" value="{{ $row->email }}" name="email" />
                                </div>
                                <div class="col-md-4">
                                    <label>Company Type</label>
                                    <select name="company_type" class="form-control">
                                        <option value="Corporate">Corporate</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Website URL</label>
                                    <input type="text" class="form-control" value="{{ $row->website_url }}" name="website_url" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label>Address Line 1</label>
                                    <textarea name="address_1" class="form-control" rows="4">{{ $row->address_1 }}</textarea>
                                </div>
                                <div class="col-md-12">
                                    <label>Address Line 2</label>
                                    <textarea name="address_2" class="form-control" rows="4">{{ $row->address_2 }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>City</label>
                                    <input class="form-control" type="text" name="city" value="{{ $row->city }}" required />
                                </div>
                                <div class="col-md-4">
                                    <label>State</label>
                                    <input class="form-control" type="text" name="state" value="{{ $row->state }}" required />
                                </div>
                                <div class="col-md-4">
                                    <label>Zip Code</label>
                                    <input class="form-control" type="text" name="zipcode" value="{{ $row->zipcode }}" required />
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
    <div class="modal fade" id="delete{{ $row->id }}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <form action="department/{{ $row->id }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="title" id="defaultModalLabel">New Company Record</h4>
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
