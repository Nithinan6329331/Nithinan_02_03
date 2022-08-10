@extends('layouts.admin.master')
@section('text')
<form class="login100-form validate-form" method="POST" action="{{ route('password.update') }}">
@csrf
					<center>
						<img src="{{asset('admin/images/logo.png')}}">
					</center>
					<span class="login100-form-title p-b-34 p-t-15">
                    Reset Password
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter password">
						<input class="input100" type="text" name="password" value="{{ $email ?? old('email') }} placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

                  

                    <div class="wrap-input100 validate-input" data-validate = "Enter Email Address">
						<input class="input100" type="text" name="Email Address" placeholder="Email Address">
						<span class="focus-input100" data-placeholder="&#xf2da;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter Confirm Password">
						<input class="input100" type="text" name="Confirm Password" placeholder="Confirm Password">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
                        Reset Password
						</button>
					</div>

				</form>
@endsection
