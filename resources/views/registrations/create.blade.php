@extends ('layouts.register')

@section ('content')
	<div class="col-8 ml-5 mt-5 mb-5">
		@include ('layouts.errors')
		<form method="POST" action="/register">
			{{ csrf_field() }}
			<div class="form-group">
		    	<label for="exampleInputName">Name</label>
		    	<input type="text" class="form-control" id="exampleInputName" placeholder="Enter name" name="name" required>
		  	</div>
			<div class="form-group">
		    	<label for="exampleInputEmail1">Email address</label>
		    	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
		    	<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  	</div>
		  	<div class="form-group">
		   		<label for="password">Password</label>
		    	<input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
		  	</div>
		  	<div class="form-group">
		   		<label for="password_confirmation">Password</label>
		    	<input type="password" class="form-control" id="password_confirmation" placeholder="Password" name="password_confirmation" required>
		  	</div>
		  	<input type="submit" class="btn btn-primary" value="Register">
		</form>
	</div>
@endsection