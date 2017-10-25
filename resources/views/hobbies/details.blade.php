<!DOCTYPE html>
<html>
<head>
	<title>Hobby Details</title>
</head>
<body>
	<h1>Hobby {{ $hobby->id }} Details</h1>
	<ul>
		<li>{{ $hobby->id }}</li>
		<li>{{ $hobby->name }}</li>
		<li>{{ $hobby->created_at }}</li>
	</ul>
</body>
</html>