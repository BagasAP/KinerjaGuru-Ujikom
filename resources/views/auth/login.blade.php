@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
<div class="col-sm-12">

    <div class="wrapper-page">

        <div class="m-t-40 account-pages" style="background-color: grey;">
            <div class="text-center account-logo-box" style="background-color: grey;">
                <h2 class="text-uppercase" style="color: black;">
                    KINERJA GURU
                </h2>
                <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
            </div>
            <div class="account-content">
                <form class="form-horizontal" action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"">
                        <div class="col-xs-12">
                            <input class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" type="email" required="required" placeholder="email" name="email">
                            @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="required" placeholder="Password" name="password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-success">
                                <input id="checkbox-signup" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="checkbox-signup">
                                    <b style="color: black;">Remember me</b>
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class="form-group text-center m-t-30">
                        <div class="col-sm-12">
                            <a href="{{ route('password.request') }}" class="text-muted"><i class="fa fa-lock m-r-5"></i> <b style="color: black;">Forgot your password?</b></a>
                        </div>
                    </div>

                    <div class="form-group account-btn text-center">
                        <div class="col-xs-12">
                            <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>

                </form>

                <div class="clearfix"></div>

            </div>
        </div>
        <!-- end card-box-->

        <!-- <div class="row m-t-50">
            <div class="col-sm-12 text-center">
                <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="text-primary m-l-5"><b>Sign Up</b></a></p>
            </div>
        </div> -->

    </div>
    <!-- end wrapper -->

</div>

@endsection
