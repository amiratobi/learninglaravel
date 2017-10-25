<!DOCTYPE html>
<html>
<head>
	<title>Hobby List</title>
</head>
<body>
	<h1>A list of my hobbies</h1>
	<ul>
		@foreach ($hobbies as $hobby)
			<li><a href="hobbies/{{ $hobby->id }}">{{ $hobby->name }}</a></li>
		@endforeach
	</ul>
</body>
</html>