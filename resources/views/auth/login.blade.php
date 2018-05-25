@extends('frontEnd.layouts.log')


<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-90 p-b-30">

					<span class="login100-form-title p-b-40">
						Login
					</span>

                <div>
                    <a href="{{url('/redirect')}}" class="btn-login-with bg1 m-b-10">
                        <i class="fa fa-facebook-official"></i>
                        Login with Facebook
                    </a>
                </div>

                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="text-center p-t-55 p-b-30">
						<span class="txt1">
							Login with email
						</span>
                    </div>

                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}"
                         data-validate="Please enter email: ex@abc.xyz">

                        <input id="email" class="form-control" type="text" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>


                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}" data-validate = "Please enter password">

                        <input id="password" class="form-control" type="password" name="password" placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
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
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>

                    </div>
                </form>
        </div>
    </div>
</div>


