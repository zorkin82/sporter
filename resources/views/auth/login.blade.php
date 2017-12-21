@extends('layout')

@section('stylesheet')
    <link rel="stylesheet" href="{{asset('vendor/icon-line-pro/style.css')}}">
@endsection

@section('content')

    <!-- Login -->
    <section class="container g-pb-20">
        <div class="row justify-content-between">
            <div class="col-md-6 col-lg-5 flex-md-unordered g-mb-80">
                <div class="g-brd-around g-brd-gray-light-v3 g-bg-white rounded g-px-30 g-py-50 mb-4">
                    <header class="text-center mb-4">
                        <h1 class="h3 g-color-black g-font-weight-300 text-capitalize">Login to your account</h1>
                    </header>

                    <!-- Form -->
                    <form class="g-py-15" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="mb-4{{ $errors->has('email') ? ' u-has-error-v1' : '' }}" >
                            <div class="input-group g-brd-primary--focus">
                                <span class="input-group-addon g-width-45 g-brd-gray-light-v3 g-color-gray-dark-v5">
                                  <i class="icon-finance-067 u-line-icon-pro"></i>
                                </span>
                                <input class="form-control g-color-black g-brd-gray-light-v3 g-py-15 g-px-15" type="email" name="email" value="{{ old('email') }}" placeholder="Email Adress">
                            </div>
                            @if ($errors->has('email'))
                                <small class="form-control-feedback">{{ $errors->first('email') }}</small>
                            @endif
                        </div>

                        <div class="mb-4{{ $errors->has('password') ? ' u-has-error-v1' : '' }}">
                            <div class="input-group g-brd-primary--focus mb-4">
                                <span class="input-group-addon g-width-45 g-brd-gray-light-v3 g-color-gray-dark-v5">
                                  <i class="icon-media-094 u-line-icon-pro"></i>
                                </span>
                                <input class="form-control g-color-black g-brd-gray-light-v3 g-py-15 g-px-15" type="password" placeholder="Password" name="password" required>
                                @if ($errors->has('password'))
                                    <small class="form-control-feedback">{{ $errors->first('password') }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="row justify-content-between mb-4">
                            <div class="col align-self-center">
                                <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25 mb-0">
                                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                                        <i class="fa g-rounded-2" data-check-icon="&#xf00c"></i>
                                    </div>
                                    Keep signed in
                                </label>
                            </div>
                            <div class="col align-self-center text-right">
                                <a class="g-font-size-13" href="{{ route('password.request') }}">Forgot password?</a>
                            </div>
                        </div>

                        <div class="mb-5">
                            <button class="btn btn-block u-btn-primary g-py-13" type="submit">Login</button>
                        </div>

                    </form>
                    <!-- End Form -->
                </div>

                <div class="text-center">
                    <p class="g-color-gray-dark-v5 mb-0">Don't have an account? <a class="g-font-weight-600" href="{{route('register')}}">signup</a>
                    </p>
                </div>
            </div>

            <div class="col-md-6 flex-md-first g-mb-80">
                <div class="mb-5">
                    <h2 class="h1 g-font-weight-300 mb-3">Welcome to Unify</h2>
                    <p class="g-color-gray-dark-v5">The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
                </div>

                <div class="row">
                    <div class="col-lg-9">
                        <!-- Icon Blocks -->
                        <div class="media mb-4">
                            <div class="d-flex mr-3">
                  <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                      <i class="icon-finance-168 u-line-icon-pro"></i>
                    </span>
                            </div>
                            <div class="media-body align-self-center">
                                <h3 class="h5">Reliable contracts</h3>
                                <p class="g-color-gray-dark-v5 mb-0">Reliable contracts, multifanctionality &amp; best usage of Unify template</p>
                            </div>
                        </div>
                        <!-- End Icon Blocks -->

                        <!-- Icon Blocks -->
                        <div class="media mb-4">
                            <div class="d-flex mr-3">
                  <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                      <i class="icon-finance-193 u-line-icon-pro"></i>
                    </span>
                            </div>
                            <div class="media-body align-self-center">
                                <h3 class="h5">Security</h3>
                                <p class="g-color-gray-dark-v5 mb-0">Secure &amp; integrated options to create individual &amp; business websites</p>
                            </div>
                        </div>
                        <!-- End Icon Blocks -->

                        <!-- Icon Blocks -->
                        <div class="media">
                            <div class="d-flex mr-3">
                  <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                      <i class="icon-finance-122 u-line-icon-pro"></i>
                    </span>
                            </div>
                            <div class="media-body align-self-center">
                                <h3 class="h5">Maintain</h3>
                                <p class="g-color-gray-dark-v5 mb-0">We get it, you're busy and it's important that someone keeps up with marketing</p>
                            </div>
                        </div>
                        <!-- End Icon Blocks -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Login -->

    {{--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
@endsection
