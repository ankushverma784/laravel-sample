@extends('layouts.app')
@section('content')
    <section id="profile-form-01" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 section-heading">
                    <div class="d-flex">
                        <h1>Update Profile <small>Update Your profile</small></h1>
                    </div>
                </div>
            </div>
            <div class="card-spacer">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="profile-form" action="{{ route('admin.updateProfile') }}" method="post" role="form">
                            @csrf
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="enroll_form_name">First Name <span class="text-danger">*</span></label>
                                            <input id="enroll_form_name" type="text" name="fname" class="form-control" placeholder="Enter First Name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="enroll_form_email">Last name<span class="text-danger">*</span></label>
                                            <input id="enroll_form_email" type="text" name="lname" class="form-control" placeholder="Enter Last name" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="enroll_form_number">Email<span class="text-danger">*</span></label>
                                            <input id="enroll_form_number" type="email" name="email" class="form-control" placeholder="Enter email" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="enroll_form_number">Language<span class="text-danger">*</span></label>
                                            <input id="enroll_form_number" type="text" name="language" class="form-control" placeholder="Enter Language" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="messages" id="enroll-form-response"></div>
                                        <input type="submit" class="submit-button btn-01" value="Submit Now" id="submitProfileBtn">
                                    </div>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
@endsection
