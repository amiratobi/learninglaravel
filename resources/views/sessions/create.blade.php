@extends ('layouts.blank')

@section ('content')
	<div class="col-6 ml-5 ml-auto mt-5 mr-auto">
		<h1 class="text-primary text-center">Sign In</h1>
		@include ('layouts.errors')
		<form method="POST" action="/login">
			{{ csrf_field() }}
			<div class="form-group">
		    	<label for="exampleInputEmail1">Email address</label>
		    	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" >
		  	</div>
		  	<div class="form-group">
		   		<label for="password">Password</label>
		    	<input type="password" class="form-control" id="password" placeholder="Password" name="password">
		  	</div>
		  	<input type="submit" class="btn btn-primary" value="Sign In">
		</form>
	</div>
@endsection