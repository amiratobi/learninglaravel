@extends ('layouts.master')

@section ('content')
	<div class="col-sm-8 blog-main">

		<h1>{{ $post->title }}</h1>
		
		<p>{{ $post->body }}</p>

		<hr>

		<div>
			
			<ul class="list-group">
				@foreach ($post->comments as $comment)

					<li class="list-group-item"><strong class="mr-2">{{ $comment->created_at->toDayDateTimeString() }}:</strong>{{ $comment->body }}</li>

				@endforeach
			</ul>

		</div>

		<hr>

		<div class="card pl-4 pr-4 pt-2">
			
			<form method="POST" action="/posts/{{ $post->id }}/comments">
		  		{{ csrf_field() }}

		  		@include ('layouts.errors')

				<div class="form-group">
					
					<textarea class="form-control" name="body" placeholder="Enter your comment here..."></textarea>

				</div>

				<div class="form-group">
					
					<button class="btn btn-primary">Submit</button>

				</div>

			</form>

		</div>
		
	</div>

@endsection

@section ('scripts')
	<script src="posts.js"></script>
@endsection