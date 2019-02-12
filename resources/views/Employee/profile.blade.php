@extends('layout.app')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body"><div id="user-profile">
                    <div class="row">
                        <div class="col-12">
                            <div class="card profile-with-cover">
                                <div class="card-img-top img-fluid bg-cover height-300" style="background: url('{{ asset('app-assets') }}/images/carousel/22.jpg') 50%;"></div>
                                <div class="media profil-cover-details w-100">
                                    <div class="media-left pl-2 pt-2">
                                        <a href="#" class="profile-image">
                                            <img src="{{ asset('app-assets') }}/images/portrait/small/avatar-s-8.png" class="rounded-circle img-border height-100" alt="Card image">
                                        </a>
                                    </div>
                                    <div class="media-body pt-3 px-2">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="card-title">Jose Diaz</h3>
                                            </div>
                                            <div class="col text-right">
                                                <button type="button" class="btn btn-primary d-"><i class="la la-cloud-upload"></i> Upload</button>
                                                <div class="btn-group d-none d-md-block float-right ml-2" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-success"><i class="la la-bell-o"></i> Notification</button>
                                                    <button type="button" class="btn btn-success"><i class="la la-cog"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <nav class="navbar navbar-light navbar-profile align-self-end">
                                    <button class="navbar-toggler d-sm-none" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation"></button>
                                    <nav class="navbar navbar-expand-lg">
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav mr-auto">

                                                <li class="nav-item">
                                                    <a class="nav-link" href="#"><i class="la la-user"></i> General Info. {{ $employee_id }}</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#"><i class="la la-briefcase"></i> Employee Info.</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#"><i class="la la-money"></i> Salary</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#"><i class="la la-check-square"></i> Allowance & Benefits</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#"><i class="la la-calendar"></i> Leaves</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#"><i class="la la-cart-arrow-down"></i> Loan</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#"><i class="la la-file-text"></i> Document</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#"><i class="la la-balance-scale"></i> Rules & Policy</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#"><i class="la la-bullhorn"></i> Announcement</a>
                                                </li>


                                            </ul>
                                        </div>
                            </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <sect
            </div>

        </div>
    </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('app-assets') }}/js/scripts/tables/datatables-extensions/datatable-responsive.min.js"></script>
    <script>
        $("#leave_type_id, #employee_id").select2({
            width:"100%",
            placeholder: "Select",
            maximumSelectionSize: 1,
        });
        $("#leave_type_idU, #employee_idU").select2({
            width:"100%",
            placeholder: "Select",
            maximumSelectionSize: 1,
        });
    </script>
@endsection
