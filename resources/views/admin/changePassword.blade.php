@extends('layouts.app')
@section('content')
    <section id="profile-form-01" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 section-heading">
                    <div class="d-flex">
                        <h1>Change Password <small>Change your password</small></h1>
                    </div>
                </div>
            </div>
            <div class="card-spacer">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="profile-form" action="{{ route('admin.changePassword') }}" method="post" role="form">
                            @csrf
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="enroll_form_name">Old Password <span class="text-danger">*</span></label>
                                            <input id="enroll_form_name" type="text" name="oldPass" class="form-control" placeholder="Enter Old Password" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="enroll_form_email">New Password<span class="text-danger">*</span></label>
                                            <input id="enroll_form_email" type="text" name="newPass" class="form-control" placeholder="Enter New Password" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="enroll_form_number">Confirm Password<span class="text-danger">*</span></label>
                                            <input id="enroll_form_number" type="text" name="confirmPass" class="form-control" placeholder="Enter Confirm Password" required="required">
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
