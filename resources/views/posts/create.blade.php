@extends ('layouts.master')

@section ('content')
	
	<div class="col-sm-8 blog-main">

		<h1>Create a POST</h1>
		<hr>
		<form method="POST" action="/posts">
		  {{ csrf_field() }}
		  @if (count($errors))
			  <div class="form-group alert alert-danger">
			  	<ul>
			  		@foreach ($errors->all() as $error)
				  		<li> {{ $error }} </li>
				  	@endforeach
			  	</ul>
			  </div>
		  @endif

		  <div class="form-group">
		    <label for="post-title">Title</label>
		    <input type="text" class="form-control" id="post-title" name="title">
		  </div>

		  <div class="form-group">
		    <label for="post-body">Body</label>
		    <textarea class="form-control" id="post-body" name="body"></textarea>
		  </div>

		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Publish</button>		  	
		  </div>
		</form>

	</div>

@endsection