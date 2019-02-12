@extends('layout.app')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                        class="fa fa-arrow-left"></i></a> Settings Constants</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                 aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#religion"
                                   role="tab" aria-controls="v-pills-home" aria-selected="true">Religion</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#civilStatus"
                                   role="tab" aria-controls="v-pills-profile" aria-selected="false">Civil Status</a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#nationality"
                                   role="tab" aria-controls="v-pills-messages" aria-selected="false">Nationality</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#bloodtype"
                                   role="tab" aria-controls="v-pills-settings" aria-selected="false">Blood Type</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#province"
                                   role="tab" aria-controls="v-pills-settings" aria-selected="false">Province</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#ethnicity"
                                   role="tab" aria-controls="v-pills-settings" aria-selected="false">Ethnicity</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill"
                                   href="#employmentStatus" role="tab" aria-controls="v-pills-settings"
                                   aria-selected="false">Employment Status</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#employmentType"
                                   role="tab" aria-controls="v-pills-settings" aria-selected="false">Employment Type</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#recordStatus"
                                   role="tab" aria-controls="v-pills-settings" aria-selected="false">Record Status</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill"
                                   href="#employeePosition" role="tab" aria-controls="v-pills-settings"
                                   aria-selected="false">Employee Position</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="religion" role="tabpanel"
                                     aria-labelledby="v-pills-home-tab">
                                    <a href="#" data-target="#create" data-toggle="modal"
                                       class="btn btn-sm btn-success text-right" style="float: right"
                                       onclick="createReligion()"><i class="fa fa-plus"></i> Create Religion</a>
                                    <div class="table-responsive">
                                        <table
                                                class="table table-bordered table-hover dataTable js-exportable shadow shadow-primary">
                                            <thead class="thead-info borderless">
                                            <tr>
                                                <th>ID</th>
                                                <th>Company ID</th>
                                                <th>Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Company ID</th>
                                                <th>Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            @foreach($religion as $row)
                                                <tr>
                                                    <td>{{ $row->id }}</td>
                                                    <td>{{ $row->company_id }}</td>
                                                    <td>{{ $row->value }}</td>
                                                    <td>
                                                        <a href="#" data-target="#edit{{ $row->id }}"
                                                           data-toggle="modal" class="btn btn-warning"><i
                                                                    class="fa fa-edit"></i> </a>
                                                        <a href="#" data-target="#delete{{ $row->id }}"
                                                           data-toggle="modal" class="btn btn-danger"><i
                                                                    class="fa fa-trash"></i> </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="civilStatus" role="tabpanel"
                                     aria-labelledby="v-pills-profile-tab">
                                    <a href="#" data-target="#create" data-toggle="modal"
                                       class="btn btn-sm btn-success text-right" style="float: right"
                                       onclick="createCivilStatus()"><i class="fa fa-plus"></i> Create Civil Status</a>
                                    <div class="table-responsive">
                                        <table
                                                class="table table-bordered table-hover dataTable js-exportable shadow shadow-primary">
                                            <thead class="thead-info borderless">
                                            <tr>
                                                <th>ID</th>
                                                <th>Company ID</th>
                                                <th>Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Company ID</th>
                                                <th>Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            @foreach($civilStatus as $row)
                                                <tr>
                                                    <td>{{ $row->id }}</td>
                                                    <td>{{ $row->company_id }}</td>
                                                    <td>{{ $row->value }}</td>
                                                    <td>
                                                        <a href="#" data-target="#edit{{ $row->id }}"
                                                           data-toggle="modal" class="btn btn-warning"><i
                                                                    class="fa fa-edit"></i> </a>
                                                        <a href="#" data-target="#delete{{ $row->id }}"
                                                           data-toggle="modal" class="btn btn-danger"><i
                                                                    class="fa fa-trash"></i> </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nationality" role="tabpanel"
                                     aria-labelledby="v-pills-profile-tab">
                                    <a href="#" data-target="#create" data-toggle="modal"
                                       class="btn btn-sm btn-success text-right" style="float: right"
                                       onclick="createNationality()"><i class="fa fa-plus"></i> Create Nationality</a>
                                    <div class="table-responsive">
                                        <table
                                                class="table table-bordered table-hover dataTable js-exportable shadow shadow-primary">
                                            <thead class="thead-info borderless">
                                            <tr>
                                                <th>ID</th>
                                                <th>Company ID</th>
                                                <th>Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Company ID</th>
                                                <th>Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            @foreach($nationality as $row)
                                                <tr>
                                                    <td>{{ $row->id }}</td>
                                                    <td>{{ $row->company_id }}</td>
                                                    <td>{{ $row->value }}</td>
                                                    <td>
                                                        <a href="#" data-target="#edit{{ $row->id }}"
                                                           data-toggle="modal" class="btn btn-warning"><i
                                                                    class="fa fa-edit"></i> </a>
                                                        <a href="#" data-target="#delete{{ $row->id }}"
                                                           data-toggle="modal" class="btn btn-danger"><i
                                                                    class="fa fa-trash"></i> </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="bloodtype" role="tabpanel"
                                     aria-labelledby="v-pills-messages-tab">
                                    <a href="#" data-target="#create" data-toggle="modal"
                                       class="btn btn-sm btn-success text-right" style="float: right"
                                       onclick="createBloodType()"><i class="fa fa-plus"></i> Create Blood Type</a>
                                    <div class="table-responsive">
                                        <table
                                                class="table table-bordered table-hover dataTable js-exportable shadow shadow-primary">
                                            <thead class="thead-info borderless">
                                            <tr>
                                                <th>ID</th>
                                                <th>Company ID</th>
                                                <th>Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Company ID</th>
                                                <th>Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            @foreach($bloodType as $row)
                                                <tr>
                                                    <td>{{ $row->id }}</td>
                                                    <td>{{ $row->company_id }}</td>
                                                    <td>{{ $row->value }}</td>
                                                    <td>
                                                        <a href="#" data-target="#edit{{ $row->id }}"
                                                           data-toggle="modal" class="btn btn-warning"><i
                                                                    class="fa fa-edit"></i> </a>
                                                        <a href="#" data-target="#delete{{ $row->id }}"
                                                           data-toggle="modal" class="btn btn-danger"><i
                                                                    class="fa fa-trash"></i> </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="province" role="tabpanel"
                                     aria-labelledby="v-pills-settings-tab">
                                    <a href="#" data-target="#create" data-toggle="modal"
                                       class="btn btn-sm btn-success text-right" style="float: right"
                                       onclick="createProvince()"><i class="fa fa-plus"></i> Create Province</a>
                                    <div class="table-responsive">
                                        <table
                                                class="table table-bordered table-hover dataTable js-exportable shadow shadow-primary">
                                            <thead class="thead-info borderless">
                                            <tr>
                                                <th>ID</th>
                                                <th>Company ID</th>
                                                <th>Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Company ID</th>
                                                <th>Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            @foreach($province as $row)
                                                <tr>
                                                    <td>{{ $row->id }}</td>
                                                    <td>{{ $row->company_id }}</td>
                                                    <td>{{ $row->value }}</td>
                                                    <td>
                                                        <a href="#" data-target="#edit{{ $row->id }}"
                                                           data-toggle="modal" class="btn btn-warning"><i
                                                                    class="fa fa-edit"></i> </a>
                                                        <a href="#" data-target="#delete{{ $row->id }}"
                                                           data-toggle="modal" class="btn btn-danger"><i
                                                                    class="fa fa-trash"></i> </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ethnicity" role="tabpanel"
                                     aria-labelledby="v-pills-settings-tab">
                                    <a href="#" data-target="#create" data-toggle="modal"
                                       class="btn btn-sm btn-success text-right" style="float: right"
                                       onclick="createEthnicity()"><i class="fa fa-plus"></i> Create Ethnicity</a>
                                    <div class="table-responsive">
                                        <table
                                                class="table table-bordered table-hover dataTable js-exportable shadow shadow-primary">
                                            <thead class="thead-info borderless">
                                            <tr>
                                                <th>ID</th>
                                                <th>Company ID</th>
                                                <th>Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Company ID</th>
                                                <th>Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            @foreach($ethnicity as $row)
                                                <tr>
                                                    <td>{{ $row->id }}</td>
                                                    <td>{{ $row->company_id }}</td>
                                                    <td>{{ $row->value }}</td>
                                                    <td>
                                                        <a href="#" data-target="#edit{{ $row->id }}"
                                                           data-toggle="modal" class="btn btn-warning"><i
                                                                    class="fa fa-edit"></i> </a>
                                                        <a href="#" data-target="#delete{{ $row->id }}"
                                                           data-toggle="modal" class="btn btn-danger"><i
                                                                    class="fa fa-trash"></i> </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="employmentStatus" role="tabpanel"
                                     aria-labelledby="v-pills-settings-tab">
                                    <a href="#" data-target="#create" data-toggle="modal"
                                       class="btn btn-sm btn-success text-right" style="float: right"
                                       onclick="createEmploymentStatus()"><i class="fa fa-plus"></i> Create Employment
                                        Status</a>
                                    <div class="table-responsive">
                                        <table
                                                class="table table-bordered table-hover dataTable js-exportable shadow shadow-primary">
                                            <thead class="thead-info borderless">
                                            <tr>
                                                <th>ID</th>
                                                <th>Company ID</th>
                                                <th>Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Company ID</th>
                                                <th>Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            @foreach($employmentStatus as $row)
                                                <tr>
                                                    <td>{{ $row->id }}</td>
                                                    <td>{{ $row->company_id }}</td>
                                                    <td>{{ $row->value }}</td>
                                                    <td>
                                                        <a href="#" data-target="#edit{{ $row->id }}"
                                                           data-toggle="modal" class="btn btn-warning"><i
                                                                    class="fa fa-edit"></i> </a>
                                                        <a href="#" data-target="#delete{{ $row->id }}"
                                                           data-toggle="modal" class="btn btn-danger"><i
                                                                    class="fa fa-trash"></i> </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="employmentType" role="tabpanel"
                                     aria-labelledby="v-pills-settings-tab">
                                    <a href="#" data-target="#create" data-toggle="modal"
                                       class="btn btn-sm btn-success text-right" style="float: right"
                                       onclick="createEmploymentType()"><i class="fa fa-plus"></i> Create Employment
                                        type</a>
                                    <div class="table-responsive">
                                        <table
                                                class="table table-bordered table-hover dataTable js-exportable shadow shadow-primary">
                                            <thead class="thead-info borderless">
                                            <tr>
                                                <th>ID</th>
                                                <th>Company ID</th>
                                                <th>Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Company ID</th>
                                                <th>Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            @foreach($employmentType as $row)
                                                <tr>
                                                    <td>{{ $row->id }}</td>
                                                    <td>{{ $row->company_id }}</td>
                                                    <td>{{ $row->value }}</td>
                                                    <td>
                                                        <a href="#" data-target="#edit{{ $row->id }}"
                                                           data-toggle="modal" class="btn btn-warning"><i
                                                                    class="fa fa-edit"></i> </a>
                                                        <a href="#" data-target="#delete{{ $row->id }}"
                                                           data-toggle="modal" class="btn btn-danger"><i
                                                                    class="fa fa-trash"></i> </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="recordStatus" role="tabpanel"
                                     aria-labelledby="v-pills-settings-tab">
                                    <a href="#" data-target="#create" data-toggle="modal"
                                       class="btn btn-sm btn-success text-right" style="float: right"
                                       onclick="createRecordStatus()"><i class="fa fa-plus"></i> Create Record
                                        Status</a>
                                    <div class="table-responsive">
                                        <table
                                                class="table table-bordered table-hover dataTable js-exportable shadow shadow-primary">
                                            <thead class="thead-info borderless">
                                            <tr>
                                                <th>ID</th>
                                                <th>Company ID</th>
                                                <th>Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Company ID</th>
                                                <th>Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            @foreach($recordStatus as $row)
                                                <tr>
                                                    <td>{{ $row->id }}</td>
                                                    <td>{{ $row->company_id }}</td>
                                                    <td>{{ $row->value }}</td>
                                                    <td>
                                                        <a href="#" data-target="#edit{{ $row->id }}"
                                                           data-toggle="modal" class="btn btn-warning"><i
                                                                    class="fa fa-edit"></i> </a>
                                                        <a href="#" data-target="#delete{{ $row->id }}"
                                                           data-toggle="modal" class="btn btn-danger"><i
                                                                    class="fa fa-trash"></i> </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="employeePosition" role="tabpanel"
                                     aria-labelledby="v-pills-settings-tab">
                                    <a href="#" data-target="#create" data-toggle="modal"
                                       class="btn btn-sm btn-success text-right" style="float: right"
                                       onclick="createEmployeePosition()"><i class="fa fa-plus"></i> Create Employee
                                        Position</a>
                                    <div class="table-responsive">
                                        <table
                                                class="table table-bordered table-hover dataTable js-exportable shadow shadow-primary">
                                            <thead class="thead-info borderless">
                                            <tr>
                                                <th>ID</th>
                                                <th>Company ID</th>
                                                <th>Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Company ID</th>
                                                <th>Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </tfoot>
                                            <tbody>
                                            @foreach($employeePosition as $row)
                                                <tr>
                                                    <td>{{ $row->id }}</td>
                                                    <td>{{ $row->company_id }}</td>
                                                    <td>{{ $row->value }}</td>
                                                    <td>
                                                        <a href="#" data-target="#edit{{ $row->id }}"
                                                           data-toggle="modal" class="btn btn-warning"><i
                                                                    class="fa fa-edit"></i> </a>
                                                        <a href="#" data-target="#delete{{ $row->id }}"
                                                           data-toggle="modal" class="btn btn-danger"><i
                                                                    class="fa fa-trash"></i> </a>
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

                </div>
                {{--<div class="col-md-4">--}}


                {{--</div>--}}
            </div>
        </div>
    </div>
    {{--<div class="menu pmd-floating-action" role="navigation">--}}

    {{--<a href="#" data-toggle="modal" data-target="#create" class="pmd-floating-action-btn btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-success" data-title="Create">--}}
    {{--<span class="pmd-floating-hidden">Primary</span>--}}
    {{--<i class="fa fa-plus"></i>--}}
    {{--</a>--}}
    {{--</div>--}}


    <div class="modal fade" id="create" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="settingsConstant" method="POST">
                    <div class="modal-header">
                        <h4 class="title" id="defaultModalLabel">New Record</h4>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" id="type" name="type"/>
                        <div class="form-group">
                            <label>Company</label>
                            <select name="company_id" class="form-control">
                                <option value="0">All</option>
                                @foreach($company as $row):
                                <option value="{{ $row->id }}">{{ $row->company_code . " - " . $row->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Values</label>
                            <input type="text" class="form-control" name="value" required/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">SAVE RECORD</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @foreach($constant as $row)
        <div class="modal fade" id="delete{{$row->id}}" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="settingsConstant/{{ $row->id }}" method="POST">
                        <div class="modal-header">
                            <h4 class="title" id="defaultModalLabel">Delete Record</h4>
                        </div>
                        <div class="modal-body">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" id="type" name="type" value="{{ $row->type }}"/>
                            <p>Are you sure you want to delete this record?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Delete</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    @foreach($constant as $row)
        <div class="modal fade" id="edit{{$row->id}}" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="settingsConstant/{{ $row->id }}" method="POST">
                        <div class="modal-header">
                            <h4 class="title" id="defaultModalLabel">Edit Record</h4>
                        </div>
                        <div class="modal-body">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" id="type" name="type" value="{{ $row->type }}"/>
                            <div class="form-group">
                                <label>Values</label>
                                <input type="text" class="form-control" name="value" value="{{ $row->value }}"
                                       required/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">SAVE CHANGES</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach


@endsection

@section('script')
    <script>
        $(function () {
            $('.js-basic-example').DataTable();

            //Exportable table
            $('.js-exportable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });

        function createReligion() {
            $('#type').val('Religion');
        }

        function createCivilStatus() {
            $('#type').val('Civil Status');
        }

        function createNationality() {
            $('#type').val('Nationality');
        }

        function createBloodType() {
            $('#type').val('Blood Type');
        }

        function createProvince() {
            $('#type').val('Province');
        }

        function createEthnicity() {
            $('#type').val('Ethnicity');
        }

        function createEmploymentStatus() {
            $('#type').val('Employment Status');
        }

        function createEmploymentType() {
            $('#type').val('Employment Type');
        }

        function createRecordStatus() {
            $('#type').val('Record Status');
        }

        function createEmployeePosition() {
            $('#type').val('Employee Position');
        }
    </script>
@endsection
