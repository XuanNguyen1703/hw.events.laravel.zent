<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="table-responsive container">
		<table class="table table-hover">
			<a href="{{asset('')}}events/create" class="btn btn-info">Add</a>
			<thead>
				<tr>
					<th>ID</th>
					<th>title</th>
					<th>content</th>
					<th>time</th>
					<th>location</th>
					<th>created_at</th>
					<th>action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($events as $event)
					<tr>
						<td>{{$event->id}}</td>
						<td>{{$event->title}}</td>
						<td>{{$event->content}}</td>
						<td>{{$event->time}}</td>
						<td>{{$event->location}}</td>
						<td>{{$event->created_at}}</td>
						<td>
							<a href="{{asset('')}}events/{{$event->id}}" class="btn btn-primary btn-sm">Show</a>
							<a href="{{asset('')}}events/{{$event->id}}/edit" class="btn btn-success btn-sm">Edit</a>
							<form action="{{asset('')}}events/{{$event->id}}" method="post" >
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								<input type="hidden" name="_method" value="delete">
								<button type="submit" class="btn btn-info btn-sm">Delete</button>
							</form>
						</td>
					</tr>
				@endforeach
				
			</tbody>
		</table>
		
	</div>
</body>
</html>