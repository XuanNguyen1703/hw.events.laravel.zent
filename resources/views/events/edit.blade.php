<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
</head>
<body>
	<div class="container">
		<div class="row">
				<form action="{{asset('')}}events/{{$event->id}}" method="post">
					@csrf
					{{method_field('put')}}
					<div class="form-group">
						<label>Title</label>
						<input type="text" class="form-control" name="title" value="{{$event->title}}">
					</div>
					<div class="form-group">
						<label>Content</label>
						<input type="text" class="form-control" name="content" value="{{$event->content}}">
					</div>
					<div>
						<label>Time</label>
						<input id="datepicker" name="time" value="{{$event->time}}">					
					</div>
					<br>
					<div class="form-group">
						<label>Location</label>
						<input type="text" class="form-control" name="location" value="{{$event->location}}">
					</div>
					<button class="btn btn-primary" type="submit">update</button>
				</form>
			
		</div>
	</div>
</body>
<script>
	$('#datepicker').datepicker({
		format: 'yyyy-mm-dd'
	});
</script>
</html>