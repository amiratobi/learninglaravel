@extends ('layouts.master')

@section ('content')
	
	<div class="col-sm-8 blog-main">

		<h1>Create a POST</h1>
		<hr>
		<form method="POST" action="/posts">
		  {{ csrf_field() }}
    	  @include ('layouts.errors')

		  <div class="form-group">
		    <label for="post-title">Title</label>
		    <input type="text" class="form-control" id="post-title" name="title">
		  </div>

		  <div class="form-group">
		    <label for="post-body">Body</label>
		    <textarea class="form-control" id="post-body" name="body" required></textarea>
		  </div>

		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Publish</button>		  	
		  </div>
		</form>

	</div>

@endsection