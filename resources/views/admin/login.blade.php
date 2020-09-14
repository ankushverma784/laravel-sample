@extends('layouts.login')
@section('content')
<section id="login-page">
    <div class="container">
        <div class="login-details">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <form id="login-form" method="post" role="form" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="contact-info">
                            <img src="{{asset('images/dashboard-logo.png')}}">
                            <h1>login Page</h1>
                            <p>Welcome to Admin Panel</h1>
                        </div>
                        <div class="controls">
                            @if(session()->has('message'))
                            <div class="alert alert-danger">
                                {{ session()->get('message') }}
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="enroll_form_email">Login Id <span class="text-danger">*</span></label>
                                        <input id="email" type="email" class="form-control" name="email" autocomplete="email" value="{{ old('email') }}" required autofocus placeholder="Enter Your Login Id">
                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="enroll_form_cpswd">Password <span class="text-danger">*</span></label>
                                        <input id="enroll_form_pswd" type="password" name="password" autocomplete="off" class="form-control" placeholder="Enter Your password" required="required">
                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center md-margin">
                                    <input type="submit" value="Sign In" class="submit-btn">
                                    <!-- <button type="submit" class="submit-btn">Sign In</button> -->
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