@extends('layouts.master')
@section('content')
<div class="login">
		<div class="login-grids">
			<div class="col-md-6 log">
					 <h3 class="tittle">Login <i class="glyphicon glyphicon-lock"></i></h3>
					 <p>Welcome, please enter the following to continue.</p>
					 <p>If you have previously Login with us, <a href="#">click here</a></p>
					 <form>
						 <h5>User Name:</h5>
						 <input type="text" value="" placeholder="Enter your username">
						 <h5>Password:</h5>
						 <input type="password" value="" placeholder="Enter password">
						 <input type="submit" value="Login">

					 </form>
					<a href="#">Forgot Password ?</a>
			</div>
			<div class="col-md-6 login-right">
					 <h3 class="tittle">New Registration <i class="glyphicon glyphicon-file"></i></h3>
					<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
					<a href="registration.html" class="hvr-bounce-to-bottom button">Create An Account</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
@endsection
