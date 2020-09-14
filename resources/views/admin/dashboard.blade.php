@extends('layouts.app')
@section('content')
<section id="home-01" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 section-heading">
                <div class="d-flex">
                    <h1>Dashboard <small>Control panel</small></h1>
                </div>
            </div>
        </div>
        <div class="card-spacer">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <a href="#">
                        <div class="dashboard-bg-01">
                            <div class="dashboard-info d-flex justify-center-between">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <div class="">
                                    <h3>Dashboard</h3>
                                    <p>CONTROL PANEL</p>
                                </div>
                            </div>
                            <div class="bg-dashboard">
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6 md-margin">
                    <a href="#">
                        <div class="dashboard-bg-02">
                            <div class="dashboard-info d-flex justify-center-between">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <div class="">
                                    <h3>Proflie Form</h3>
                                    <p>FILL YOUR DETAILS</p>
                                </div>
                            </div>
                            <div class="bg-dashboard">
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6 margin-top">
                    <a href="#">
                        <div class="dashboard-bg-02">
                            <div class="dashboard-info d-flex justify-center-between">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                <div class="">
                                    <h3>Proflie View</h3>
                                    <p>VIEW YOUR PERSONAL INFORMAITON</p>
                                </div>
                            </div>
                            <div class="bg-dashboard">
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6 margin-top">
                    <a href="#">
                        <div class="dashboard-bg-01">
                            <div class="dashboard-info d-flex justify-center-between">
                                <i class="fa fa-database"></i>
                                <div class="">
                                    <h3>Data Tables</h3>
                                    <p>VIEW ALL TABLE DETAILS HERE</p>
                                </div>
                            </div>
                            <div class="bg-dashboard">
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
@endsection