<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Test Scripts Here.</h1>

	@foreach(  $posts as $post )
		<li> {{ $post->title }} </li>
	@endforeach

</body>
</html>