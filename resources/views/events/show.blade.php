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
	<table cellspacing="0" class="table table-bordered table-detail table-striped">
									<colgroup>
										<col style="width: 25%;"><col>
									</colgroup>
									<tbody>
										<tr>
											<td rel="sku">ID</td>
											<td class="last">{{$event->id}}</td>
										</tr>
										<tr>
											<td rel="only_ship_to">Title</td>
											<td class="last">{{$event->title}}</td>
										</tr>
										<tr>
											<td rel="only_ship_to">content</td>
											<td class="last">{{$event->content}}</td>
										</tr>
										<tr>
											<td rel="brand">time</td>
											<td class="last">{{$event->time}}</td>
										</tr>
										<tr>
											<td rel="origin">location</td>
											<td class="last">{{$event->location}}</td>
										</tr>
									</tbody>
								</table>
</body>
</html>